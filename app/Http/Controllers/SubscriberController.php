<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Micovi\LaravelSendy\LaravelSendy;

class SubscriberController extends Controller
{

    public function index(){
        $subscriber = Subscriber::orderBy('id', 'desc')->paginate(15);
        return view('admin.pages.subscriber.subscriber', compact('subscriber'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required',
        ]);

        $subscri = Subscriber::get();
        $email = $request->email;
        $subscri = new Subscriber();
        $subscri->email = $email;


        $subscri->save();


        return back()->with('message', ' Thank you for subscribing ');
    }

}
