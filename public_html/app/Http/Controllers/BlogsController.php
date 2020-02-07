<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Constants;
use App\Profile;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class BlogsController extends Controller
{
    public function index(Request $request){

        $relpath = $this->getConstants();
        $userLoggedArr = $this->checkUserLogged();

        if($request != null && !empty($request)) {
            if ($request->request->get("namesearch") != null){
                $retrieveBlogs = $this->retrieveBlogsByKeywords($request);
            } else {
                $retrieveBlogs = $this->retrieveBlogsByTitle();
            }
        } else {
            $retrieveBlogs = $this->retrieveBlogsByTitle();
        }

        $blogs = $retrieveBlogs["query_results"];
        $blogs = $this->addBlogViewFormatting($blogs, $request);

        $namesearch = $retrieveBlogs["namesearch"];
        $profile = Profile::getProfileDetails();

        $agent = new Agent();

        return view("/blogsboard", compact("newschange", "relpath", "userLoggedArr", "blogs", "namesearch", "profile", "agent"));
    }

    public function show(){

        $relpath = $this->getConstants();
        $userLoggedArr = $this->checkUserLogged();

        $retrieveBlogs = $this->retrieveBlogsByTitle();
        $blogs = $retrieveBlogs["query_results"];
        $blogs = $this->addBlogViewFormatting($blogs, null);

        $namesearch = $retrieveBlogs["namesearch"];
        $profile = Profile::getProfileDetails();

        $agent = new Agent();

        return view("/blogsboard", compact("newschange", "relpath", "userLoggedArr", "blogs", "namesearch", "profile", "agent"));
    }

    public function showBlog($id){

        $blog = Blog::all()->where('id', $id)->first();
        $agent = new Agent();

        return view("/blog", compact("blog", "agent"));
    }

    public function deleteBlog($id){
        $blogImg = Blog::where('id', $id)->first()->imgUpload;
        if ($blogImg !== null){
            unlink(public_path('/uploads/'. Blog::where('id', $id)->first()->imgUpload));
        }

        Blog::where('id', $id)->delete();

        return $this->show();
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

    public function retrieveBlogsByTitle()
    {
        if (isset($_POST["namesearch"])) {
            $searchquery = $_POST["namesearch"];
            if (!empty($searchquery)) {
                $_SESSION["searchquery"] = Blog::where('blogTitle', 'like', '%' . $searchquery . '%')->orderByDesc('updated_at')->paginate(5);
            } else {
                $_SESSION["searchquery"] = Blog::orderByDesc('updated_at')->paginate(5);
            }

            return array(
                "query_results" => $_SESSION["searchquery"],
                "namesearch" => $_POST["namesearch"]
            );
        } else {
            if (isset($newschange) && $newschange > 0) {
                $result = Blog::where('id', $newschange)->first();
            } else {
                $result = Blog::orderByDesc('updated_at')->paginate(5);
            }

            return array(
                "query_results" => $result,
                "namesearch" => null
            );
        }
    }

    public function retrieveBlogsByKeywords(Request $request){
        $keywords = explode(" ", $request->request->get("namesearch"));

        $query_results = Blog::where('blogTitle', 'like', '%' . $request->request->get("namesearch") . '%')
            ->orWhere('description', 'like', '%' . $request->request->get("namesearch") . '%');

        $query_results2 = Blog::where('blogTitle', 'like', '%' . $keywords[0] . '%')
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

        $blog = new Blog();
        $blog->blogTitle = $blogTitle;
        $blog->description = $blogcontent;
        $blog->userid = 0;

        if ($blogImg !== null){
            $blogImgFileName = date('d_m_Y').'_'.$blogImg->getClientOriginalName();
            $blog->imgUpload = $blogImgFileName;
            $blogImg->move(public_path('/uploads'), $blogImgFileName);
        }

        $blog->save();

        return $this->show();
    }

    public function editBlog($id, Request $request){

        $blogTitle = $request->request->get("title");
        $blogcontent = $request->request->get("blogContent");
        $blogImg = $request->file('newsImg');

        if ($blogImg !== null){
            $previousImg = Blog::where('id', $id)->first()->imgUpload;
            if ($previousImg !== null){
                unlink(public_path('/uploads/'. Blog::where('id', $id)->first()->imgUpload));
            }
            $blogImgFileName = date('d_m_Y').'_'.$blogImg->getClientOriginalName();
            Blog::where('id', $id)
                ->update(array('blogTitle' => $blogTitle, 'description' => $blogcontent, 'imgUpload' => $blogImgFileName));
            $blogImg->move(public_path('/uploads'), $blogImgFileName);
        } else {
            Blog::where('id', $id)
                ->update(array('blogTitle' => $blogTitle, 'description' => $blogcontent));
        }

//        $blog->blogTitle = $blogTitle;
//        $blog->description = $blogcontent;


        return $this->show();
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
                $stringCutTitle = substr($title, 0, 132);
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
                $letters_limit = 324;
            } else {
                $letters_limit = 324 * 5;
            }
        } else {
            $letters_limit = 324;
        }

        return $letters_limit;
    }

}
