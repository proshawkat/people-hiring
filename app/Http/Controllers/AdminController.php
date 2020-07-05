<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Order;
use App\Subscriber;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total_order = Order::count();
        $total_subscriber = Subscriber::count();
        $total_contact_msg = Contact::count();
        
        return view('home')->with([
            'total_order' =>  $total_order,
            'total_subscriber' => $total_subscriber,
            'total_contact_msg' =>  $total_contact_msg
        ]);
    }

    public function contact(){
    	$contacts = Contact::orderBy('id', 'desc')->paginate(15);
    	return view('admin.pages.contact.contact', compact('contacts'));
    }
}
