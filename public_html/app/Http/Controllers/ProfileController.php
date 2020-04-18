<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;

class ProfileController extends Controller
{
    public function index($id) {
        $profile = Profile::getProfileDetails($id);
        $agent = new Agent();
        return view ("/profile", compact("profile", "agent"));
    }

    public function editProfile(Request $request){
        $name = $request->request->get("name");
        $bio = $request->request->get("bio");
        $profilePic = $request->file("profilePic");
        $coverImg = $request->file("coverImg");

        $toBeStoredArr = array();

        if ($bio != null){
            $toBeStoredArr["about"] = $bio;
        }

        if ($profilePic !== null){
            $previousImg = Profile::where('userid', Auth::id())->first()->profilePic;
            if ($previousImg !== null){
                unlink(public_path('/uploads/users/'. Auth::id() . '/profile/photo/' . $previousImg));
            }
            $profilePicName = date('d_m_Y').'_'.$profilePic->getClientOriginalName();
            $profilePic->move(public_path('/uploads/users/' . Auth::id() . '/profile/photo'), $profilePicName);
            $toBeStoredArr["profilePic"] = $profilePicName;
        }

        if ($coverImg !== null){
            $previousImg = Profile::where('userid', Auth::id())->first()->coverImg;
            if ($previousImg !== null){
                unlink(public_path('/uploads/users/'. Auth::id() . '/profile/cover/' . $previousImg));
            }
            $coverImgName = date('d_m_Y').'_'.$coverImg->getClientOriginalName();
            $coverImg->move(public_path('/uploads/users/' . Auth::id() . '/profile/cover'), $coverImgName);
            $toBeStoredArr["coverImg"] = $coverImgName;
        }

        Profile::where('userid', Auth::id())
            ->update($toBeStoredArr);

        User::where('id', Auth::id())
            ->update(array('name' => $name));

        $profile = Profile::getProfileDetails(Auth::id());
        $agent = new Agent();
        return view ("/profile", compact("profile", "agent"));
    }


}
