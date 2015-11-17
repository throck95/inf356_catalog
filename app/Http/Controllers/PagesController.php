<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function about() {
        return view("pages.about")->with(["fName"=>"Donald", "lName"=>"Trump", "title"=>"Republican Party 2016 Presidential Election Front-Runner"]);
    }

    function contact() {
        return view("pages.contact")->with(["fName"=>"Donald", "lName"=>"Trump", "phone"=>"1-800-USTRUMP", "email"=>"trump4prez@trump.com"]);
    }

    function fruits() {
        /*$data = ["apple", "banana", "cantaloupe", "durian", "eggplant", "fig", "grape", "honeydew", "ita palm", "jujube",
            "kumquat", "lemon", "mango", "nectarine", "orange", "papaya", "quince", "rambutan", "starfruit", "tomato", "ugli", "voavanga",
        "watermelon", "xigua", "yellow watermelon", "zucchini"];*/
        $data = [];
        return view("pages.fruits")->with( compact("data"));
    }

    function products($id) {
        return "{'id':" . $id . ",'name':'Fruit Loops','price':4.99}";
    }
}
