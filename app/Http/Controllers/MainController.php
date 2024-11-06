<?php

namespace App\Http\Controllers;

class MainController extends Controller
{

    public function index()
    {
        return view('index');
    }

    // In MainController.php
    public function aboutus()
    {
        return view('aboutus');
    }



    public function contactus()
    {
        return view('contactus');
    }
}
