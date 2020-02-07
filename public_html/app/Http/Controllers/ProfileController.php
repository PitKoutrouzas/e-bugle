<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Profile;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class ProfileController extends Controller
{
    public function index() {
        $profile = Profile::getProfileDetails();
        $agent = new Agent();
        return view ("/profile", compact("profile", "agent"));
    }

}
