<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function getOrder(){
    	$orders = Order::orderBy('id', 'desc')->paginate(15);
    	return view('admin.pages.order.show', compact('orders'));
    }
}
