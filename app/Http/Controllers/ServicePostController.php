<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class ServicePostController extends Controller
{
    public function service(){
    	$gallery = Gallery::orderBy('id', 'desc')->get();
    	return view('pages.service.service', compact('gallery'));
    }

    public function how_we_work(){
    	return view('pages.how_we_work.how_we_work');
    }
    
    public function designlimit(){
    	return view('pages.designlimit.designlimit');
    }
}
