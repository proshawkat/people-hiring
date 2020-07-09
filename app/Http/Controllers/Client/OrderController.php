<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function index(){
        $services = Order::with('service')->get();
        return view('client.services')->with(['services' => $services]);
    }
}
