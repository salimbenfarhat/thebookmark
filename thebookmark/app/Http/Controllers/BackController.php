<?php

namespace thebookmark\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('back/home');
    }
    
    public function settings()
    {
        return view('back/settings');
    }
}
