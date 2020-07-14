<?php

namespace App\Http\Controllers\Client;

use App\ServiceRating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){

        $services = Order::with('service')->where('client_id', Auth::guard('clients')->user()->id)->get();
//        $rating = ServiceRating::;
//        dd($services->service->avgRating);
        return view('client.services')->with([
            'services' => $services
        ]);
    }
}
