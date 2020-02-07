<?php

namespace App\Http\Controllers;
use App\Contactu;
use App\Http\Constants;

class ContactUsController extends Controller
{
    public function index(){

        $relpath = $this->getConstants();
        $userLoggedArr = $this->checkUserLogged();
        $dbContactUs = $this->getDB_ContactUs();

        return view("/contactus",compact('relpath', 'userLoggedArr', 'dbContactUs'));
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

    public function getDB_ContactUs(){
        return Contactu::all()->first();
    }
}
