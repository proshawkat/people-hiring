<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     
    */
    
    
    public function pagenotfound()
    {
        return view('pages.errors.404');
    }
    
    
    public function sitemap()
    {
        return view('pages.sitemap.sitemap');
    }

    public function recruitment()
    {
        return view('pages.recruitment.recruitment');
    }

}
