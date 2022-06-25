<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.layouts.home');
    }
    public function aboutus(){
        return view('website.layouts.about');
    }
    public function doctors(){
        return view('website.layouts.doctor');
    }
    public function blog(){
        return view('website.layouts.blog');
    }
    public function contact(){
        return view('website.layouts.contact');
    }
    
    
}
