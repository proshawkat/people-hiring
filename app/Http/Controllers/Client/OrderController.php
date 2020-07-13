<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){

        $services = Order::with('service')->where('client_id', Auth::guard('clients')->user()->id)->get();
//        dd($orders);
        return view('client.services')->with(['services' => $services]);
    }
}
