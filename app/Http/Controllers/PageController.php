<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

      public function webApplication()
    {
        return view('pages.web_application');
    }

    public function mobileApplication()
    {
        return view('pages.mobile_application');
    }

    public function about()
    {
        return view('pages.about');
    }


}
