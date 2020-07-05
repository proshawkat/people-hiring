<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    
    public function details(){
    	return view('pages.process.single_process');
    }
}
