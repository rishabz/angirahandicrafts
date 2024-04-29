<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helpers\CommonClass;

class HomeController extends Controller
{
    public function index(){
        $dashboardUrl = CommonClass::getDashbordUrl();
        return view('index',compact("dashboardUrl"));
    }

    public function blog(){
        $dashboardUrl = CommonClass::getDashbordUrl();
        return view('blog',compact("dashboardUrl"));
    }

    public function aboutUs(){
        $dashboardUrl = CommonClass::getDashbordUrl();
        return view('about-us',compact("dashboardUrl"));
    }

    public function contactUs(){
        $dashboardUrl = CommonClass::getDashbordUrl();
        return view('contact-us',compact("dashboardUrl"));
    }

    public function blogeDetails($title){
        $dashboardUrl = CommonClass::getDashbordUrl();
        return view('bloge-detail',compact("dashboardUrl"));
    }

    public function store(){
        $dashboardUrl = CommonClass::getDashbordUrl();
        return view('store',compact("dashboardUrl"));
    }

    public function shop(){
        $dashboardUrl = CommonClass::getDashbordUrl();
        return view('shop',compact("dashboardUrl"));
    }
}
