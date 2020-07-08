<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Micovi\LaravelSendy\LaravelSendy;

class SubscriberController extends Controller
{

    public function store(Request $request){

        $subscri = Subscriber::get();
        $email = $request->email;
        $subscri = new Subscriber();
        $subscri->email = $email;


        $subscri->save();


        return back()->with('message', ' Thank you for subscribing ');
    }

}
