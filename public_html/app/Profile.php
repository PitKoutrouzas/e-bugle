<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Extra elements to add to collection object

    public $counted_blogs = null;
    public $date_created = null;

    public static function getProfileDetails(){
        $profile = Profile::all()->first();
        $profile->counted_blogs = Blog::where('userid', 0)->count();
        $profile->date_created = date('j M Y', strtotime($profile->created_at));
        return $profile;
    }
}
