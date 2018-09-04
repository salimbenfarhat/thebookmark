<?php

namespace thebookmark\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front/index');
    }
    
    public function aboutus()
    {
        return view('front/aboutus');
    }
    
    public function bookmarks()
    {
        return view('front/bookmarks');
    }
    
    public function offers()
    {
        return view('front/offers');
    }
    
    public function api()
    {
        return view('front/api');
    }
    
    public function contact()
    {
        return view('front/contact');
    }
}
