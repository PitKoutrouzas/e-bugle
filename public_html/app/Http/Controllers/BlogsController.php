<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Http\Constants;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Jenssegers\Agent\Agent;

class BlogsController extends Controller
{
    public function index($id, Request $request){

        $relpath = $this->getConstants();
        $userLoggedArr = $this->checkUserLogged();
        $selected_category = null;

        if($request != null && !empty($request)) {
            if ($request->request->get("namesearch")
                != null){
                $retrieveBlogs = $this->retrieveBlogsByKeywords($request);
            } else if ($request->input('category') != null) {
                $selected_category = $request->input('category');
                $retrieveBlogs = $this->retrieveBlogsByTitle($id, true, $selected_category);
            } else {
                $retrieveBlogs = $this->retrieveBlogsByTitle($id, true, nullOrEmptyString());
            }
        } else {
            $retrieveBlogs = $this->retrieveBlogsByTitle($id, true, nullOrEmptyString());
        }

        $blogs = $retrieveBlogs["query_results"];
        $blogs = $this->addBlogViewFormatting($blogs, $request);

        $namesearch = $retrieveBlogs["namesearch"];
        $profile = Profile::getProfileDetails($id);

        $categories = Category::all();

        $agent = new Agent();

        return view("/blogsboard", compact("newschange", "relpath", "userLoggedArr", "blogs", "namesearch", "profile", "agent", "categories", "selected_category"));
    }

    public function feed(Request $request){

        $relpath = $this->getConstants();
        $userLoggedArr = $this->checkUserLogged();

        if($request != null && !empty($request)) {
            if ($request->request->get("namesearch") != null){
                $retrieveBlogs = $this->retrieveBlogsByKeywords($request);
            } else {
                // if(!empty($category)) {
                $retrieveBlogs = $this->retrieveBlogsByTitle(0,false, nullOrEmptyString());
                // } else {
                // $retrieveBlogs = $this->retrieveBlogsByTitle(0,false /*, $category */);
                // }
            }
        } else {
            $retrieveBlogs = $this->retrieveBlogsByTitle(0,false, nullOrEmptyString());
        }

        $blogs = $retrieveBlogs["query_results"];
        $blogs = $this->addBlogViewFormatting($blogs, $request);

        $namesearch = $retrieveBlogs["namesearch"];

        if(Auth::check()){
            $profile = Profile::getProfileDetails(Auth::id());
        } else {
            $profile = Profile::getProfileDetails(0);
        }

        $agent = new Agent();

        return view("/blogsfeed", compact("newschange", "relpath", "userLoggedArr", "blogs", "namesearch", "profile", "agent"));
    }

    public function feedWithCategory($category, Request $request){

        $relpath = $this->getConstants();
        $userLoggedArr = $this->checkUserLogged();

        $retrieveBlogs = $this->retrieveBlogsByTitle(0,false, $category);

        $blogs = $retrieveBlogs["query_results"];
        $blogs = $this->addBlogViewFormatting($blogs, $request);

        $namesearch = $retrieveBlogs["namesearch"];

        if(Auth::check()){
            $profile = Profile::getProfileDetails(Auth::id());
        } else {
            $profile = Profile::getProfileDetails(0);
        }

        $agent = new Agent();

        return view("/blogsfeed", compact("newschange", "relpath", "userLoggedArr", "blogs", "namesearch", "profile", "agent", "category"));
    }

    public function show($id){

        $relpath = $this->getConstants();
        $userLoggedArr = $this->checkUserLogged();

        $retrieveBlogs = $this->retrieveBlogsByTitle($id,true, nullOrEmptyString());
        $blogs = $retrieveBlogs["query_results"];
        $blogs = $this->addBlogViewFormatting($blogs, null);

        $namesearch = $retrieveBlogs["namesearch"];
        $profile = Profile::getProfileDetails($id);

        $agent = new Agent();

        return view("/blogsboard", compact("newschange", "relpath", "userLoggedArr", "blogs", "namesearch", "profile", "agent"));
    }

    public function showBlog($id){

        $blog = Blog::join('users', 'blogs.userid', '=', 'users.id')
            ->select('blogs.*', 'users.name')
            ->where('blogs.id', $id)->first();

        if ($blog == null){
            $userid = Auth::id();
        } else {
            $userid = $blog->userid;
        }

        $countblogs = Blog::all()->count();
        if ($countblogs > 6){
            $countblogs = 6;
        }

        $moreblogs = Blog::join('profiles', 'blogs.userid', '=', 'profiles.userid')
            ->select('blogs.id', 'blogs.userid',  'blogs.blogTitle', 'blogs.imgUpload', 'profiles.about',  'profiles.profilePic')
            ->whereNotIn('blogs.id', [$id])
            ->inRandomOrder()
            ->limit($countblogs)
            ->get();

//        $userid = 0;
//        if (Auth::check()){
//            $userid = Auth::id();
//        }

        $profile = Profile::where('userid', $userid)->get()->first();

        $categories = Category::all();

        $agent = new Agent();

        return view("/blog", compact("blog", "profile", "agent", "moreblogs", "categories"));
    }

    public function deleteBlog($id){
        $blogImg = Blog::where('id', $id)->first()->imgUpload;
        if ($blogImg !== null){
            try {
                unlink(base_path('/uploads/users/'.Auth::id().'/blogs/'. Blog::where('id', $id)->first()->imgUpload));
            } catch (\Exception $e) {
                // catch deletes from server
            }
        }

        Blog::where('id', $id)->delete();

        return $this->show(Auth::id());
    }

    public function getConstants(){
        return Constants::RELATIVE_PATH;
    }

    public function checkUserLogged(){

        if (isset($_COOKIE["signedin"])) {
            $person = "You are signed in as " . $_COOKIE["signedin"];
        } else {
            $person = "";
        }
        if (isset($_COOKIE["typein"])) {
            $type = $_COOKIE["typein"];
        } else {
            $type = 0;
        }

        return array(
            "person" => $person,
            "type" => $type
        );
    }

    public function retrieveBlogsByTitle($id, $isMyBlogs, $category)
    {
        if (isset($_POST["namesearch"])) {
            $searchquery = $_POST["namesearch"];
            if (!empty($searchquery)) {
                $_SESSION["searchquery"] = Blog::join('users', 'blogs.userid', '=', 'users.id')
                    ->join('profiles', 'blogs.userid', '=', 'profiles.userid')
                    ->select('blogs.*', 'users.name', 'profiles.profilePic')
                    ->where('blogTitle', 'like', '%' . $searchquery . '%')->orderByDesc('updated_at')->paginate(5);
            } else {
                $_SESSION["searchquery"] = Blog::join('users', 'blogs.userid', '=', 'users.id')
                    ->join('profiles', 'blogs.userid', '=', 'profiles.userid')
                    ->select('blogs.*', 'users.name', 'profiles.profilePic')
                    ->orderByDesc('updated_at')->paginate(5);
            }

            return array(
                "query_results" => $_SESSION["searchquery"],
                "namesearch" => $_POST["namesearch"]
            );
        } else {
            if (isset($newschange) && $newschange > 0) {
                $result = Blog::where('id', $newschange)->first();
            } else if ($isMyBlogs == true){
                if (($category == nullOrEmptyString()) || ($category == "0")){
                    $result = $this->retrieveUserBlogs($id, nullOrEmptyString());
                } else {
                    $result = $this->retrieveUserBlogs($id, $category);
                }
            } else {
                if ($category != nullOrEmptyString()){
                    $result = $this->retrieveBlogsByCategory($category);
                } else {
                    $result = $this->retrieveAllBlogs();
                }
            }

            return array(
                "query_results" => $result,
                "namesearch" => null
            );
        }
    }

    public function retrieveUserBlogs($id, $category){
        if ($category != nullOrEmptyString()){
            return Blog::join('users', 'blogs.userid', '=', 'users.id')
                ->join('categories', 'blogs.category', '=', 'categories.id')
                ->select('blogs.*', 'users.name', 'categories.name as categoryName')
                ->where('userid', $id)->where('category', $category)->orderByDesc('updated_at')->paginate(5);
        } else {
            return Blog::join('users', 'blogs.userid', '=', 'users.id')
                ->join('categories', 'blogs.category', '=', 'categories.id')
                ->select('blogs.*', 'users.name', 'categories.name as categoryName')
                ->where('userid', $id)->orderByDesc('updated_at')->paginate(5);
        }
    }

    public function retrieveAllBlogs(){
        $allblogs = Blog::join('users', 'blogs.userid', '=', 'users.id')
            ->join('profiles', 'blogs.userid', '=', 'profiles.userid')
            ->join('categories', 'blogs.category', '=', 'categories.id')
            ->select('blogs.*', 'users.name', 'categories.name as categoryName', 'profiles.profilePic')
            ->orderByDesc('updated_at')
            ->paginate(10);

        return $allblogs;
    }

    public function retrieveBlogsByCategory($category){
        $blogsByCategory = Blog::join('users', 'blogs.userid', '=', 'users.id')
            ->join('profiles', 'blogs.userid', '=', 'profiles.userid')
            ->join('categories', 'blogs.category', '=', 'categories.id')
            ->select('blogs.*', 'users.name', 'categories.name as categoryName', 'profiles.profilePic')
            ->where('category', $category)
            ->orderByDesc('updated_at')
            ->paginate(10);

        return $blogsByCategory;
    }

    public function retrieveBlogsByKeywords(Request $request){
        $keywords = explode(" ", $request->request->get("namesearch"));

        $query_results = Blog::join('users', 'blogs.userid', '=', 'users.id')
            ->join('profiles', 'blogs.userid', '=', 'profiles.userid')
            ->join('categories', 'blogs.category', '=', 'categories.id')
            ->select('blogs.*', 'users.name', 'categories.name as categoryName', 'profiles.profilePic')
            ->where('blogTitle', 'like', '%' . $request->request->get("namesearch") . '%')
            ->orWhere('description', 'like', '%' . $request->request->get("namesearch") . '%');

        $query_results2 = Blog::join('users', 'blogs.userid', '=', 'users.id')
            ->join('profiles', 'blogs.userid', '=', 'profiles.userid')
            ->join('categories', 'blogs.category', '=', 'categories.id')
            ->select('blogs.*', 'users.name', 'categories.name as categoryName', 'profiles.profilePic')
            ->where('blogTitle', 'like', '%' . $keywords[0] . '%')
            ->orWhere('description', 'like', '%' . $keywords[0] . '%');

        if (count($keywords,COUNT_NORMAL) > 1) {
            foreach ($keywords as $keyword){
                $query_results2->orWhere('blogTitle', 'like', '%'. $keyword .'%')
                    ->orWhere('description', 'like', '%'.$keyword.'%');
            }
        }

        $query_results = collect($query_results->get());
        $query_results2 = collect($query_results2->get());

        $query_results2->each(function($element) use (&$query_results) {
            if ($query_results->where('id', $element->id)->first() == null){
                $query_results->push($element);
            }
        });

        return array(
            "query_results" => $query_results,
            "namesearch" => null
        );
    }

    public function createBlog(Request $request){

        $blogTitle = $request->request->get("title");
        $blogcontent = $request->request->get("blogContent");
        $blogImg = $request->file('newsImg');
        $blogCategory = $request->input('category');

        $blog = new Blog();
        $blog->blogTitle = $blogTitle;
        $blog->description = $blogcontent;
        $blog->category = $blogCategory;

        if (Auth::check()){
            $blog->userid = Auth::id();
        } else {
            $blog->userid = 0;
        }


        if ($blogImg !== null){
            $blogImgFileName = date('d_m_Y').'_'.$blogImg->getClientOriginalName();
            $blog->imgUpload = $blogImgFileName;
            $blogImg->move(base_path('/uploads/users/'.Auth::id().'/blogs'), $blogImgFileName);
        }

        $blog->save();

        return $this->show(Auth::id());
    }

    public function editBlog($id, Request $request){

        $blogTitle = $request->request->get("title");
        $blogcontent = $request->request->get("blogContent");
        $blogImg = $request->file('newsImg');
        $blogCategory = $request->input('category');

        if ($blogImg !== null){
            $previousImg = Blog::where('id', $id)->first()->imgUpload;
            if ($previousImg !== null){
                try {
                    unlink(base_path('/uploads/users/'.Auth::id().'/blogs/'. $previousImg));
                } catch (\Exception $e) {
                    // catch deletes from server
                }
            }
            $blogImgFileName = date('d_m_Y').'_'.$blogImg->getClientOriginalName();
            Blog::where('id', $id)
                ->update(array('blogTitle' => $blogTitle, 'description' => $blogcontent, 'category' => $blogCategory, 'imgUpload' => $blogImgFileName));
            $blogImg->move(base_path('/uploads/users/'.Auth::id().'/blogs'), $blogImgFileName);
        } else {
            Blog::where('id', $id)
                ->update(array('blogTitle' => $blogTitle, 'description' => $blogcontent, 'category' => $blogCategory));
        }

//        $blog->blogTitle = $blogTitle;
//        $blog->description = $blogcontent;


        return $this->show(Auth::id());
    }

    public function addBlogViewFormatting($blogs, $request){
        if ($request != null) {
            if ($request->request->get("namesearch") != null){
                $keywords = explode(" ", $request->request->get("namesearch"));
            } else {
                $keywords = null;
            }
        } else {
            $keywords = null;
        }

        foreach($blogs as $blog){

            $string = strip_tags($blog->description);

            //132

            $letters_limit = $this->containsGreekLetters($string);

            if (strlen($string) > $letters_limit+1) {

                // truncate string
                $stringCut = substr($string, 0, $letters_limit);
                $endPoint = strrpos($stringCut, ' ');

                //if the string doesn't contain any space then it will cut without word basis.
                $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                $string .= '...';
            }


            //$string = preg_replace('/<iframe.*?\/iframe>/i','', $string);


            //put highlight tags for the keywords
            if($keywords != null) {
                foreach ($keywords as $keyword) {
                    $string = str_replace($keyword, "<span style=\"background-color: #5bc0de\">" . $keyword . "</span>", $string);
                }
            }

            $blog->formatted_description = $string;

            $title = strip_tags($blog->blogTitle);

            if (strlen($title) > 132) {

                // truncate string
                $stringCutTitle = substr($title, 0, 80);
                $endPointTitle = strrpos($stringCutTitle, ' ');

                //if the string doesn't contain any space then it will cut without word basis.
                $title = $endPointTitle ? substr($stringCutTitle, 0, $endPointTitle) : substr($stringCutTitle, 0);
                $title .= '...';

            }

            if($keywords != null) {
                foreach ($keywords as $keyword) {
                    $title = str_replace($keyword, "<span style=\"background-color: #5bc0de\">" . $keyword . "</span>", $title);
                }
            }

            $blog->formatted_blogTitle = $title;
            $blog->formatted_created_at = date('j M Y H:i', strtotime($blog->created_at));
            $blog->formatted_updated_at = date('j M Y H:i', strtotime($blog->updated_at));
            //        $blog->created_on = strtotime($row["created_on"]);
        }

        return $blogs;
    }

    public function containsGreekLetters($string)
    {
        $letters_limit = 0;

        for ($i=0; $i<sizeof(Constants::GREEK_LETTERS); $i++){
            $charpos = strpos($string, '&' . Constants::GREEK_LETTERS[$i]);
            if ($charpos !== false){
                break;
            }
        }

        if ($charpos !== false){
            if (substr($string, $charpos+1,$charpos+1) === ' '){
                $letters_limit = 200;
            } else {
                $letters_limit = 200 * 5;
            }
        } else {
            $letters_limit = 200;
        }

        return $letters_limit;
    }

}
