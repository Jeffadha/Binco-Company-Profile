<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function aboutPage()
    {
        return view('landing.about-page');
    }

    public function blogPage()
    {
        return view('landing.blogs');
    }

    public function contactPage()
    {
        return view('landing.contact-us');
    }
}
