<?php

namespace App\Http\Controllers;

use App\OurServices;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
    	$services = OurServices::get();
    	return view('pages.price.price', compact('services'));
    }

    public function single_price($id){
  		$service = array();

    	if($id == 'pro'){
    		$service['id'] = '2'; 
    		$service['total'] = 1200; 
    		$service['title'] = 'Pro Plan'; 
    	}else if($id == 'standard'){
    		$service['id'] = '1'; 
    		$service['total'] = 529; 
    		$service['title'] = 'Standard Plan'; 
    	}
    	return view('pages.price.single_price_page', compact('service'));
    }

    public function get_started(){
        return view('pages.price.get_started');
    }

    public function terms_condition(){
        return view('pages.price.terms_condition');
    }
}
