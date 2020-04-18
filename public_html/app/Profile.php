<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Profile extends Model
{
    // Extra elements to add to collection object

    public $counted_blogs = null;
    public $date_created = null;
    public $name = null;

    public static function getProfileDetails($id){

//        if (Auth::check()) {
//            $userid = Auth::id();
//        } else {
//            $userid = 0;
//        }

        $userid = $id;

        $profile = self::checkProfileExists($userid);
        return $profile;
    }

    public static function checkProfileExists($userid){

        $profile = Profile::where('userid', $userid)->get()->first();

        if ($profile == null){
            //bring default user 0
            $profile = Profile::where('userid', 0)->get()->first();
        }

        $profile = self::getUserProfileDetails($profile);
        return $profile;
    }

    public static function getUserProfileDetails($profile){
        $profile->counted_blogs = Blog::where('userid', $profile->userid)->count();
        $profile->date_created = date('j M Y', strtotime($profile->created_at));
        $profile->name = User::where('id', $profile->userid)->get()->pluck('name')->first();

        return $profile;
    }
}
