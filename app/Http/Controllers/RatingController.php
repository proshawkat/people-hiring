<?php

namespace App\Http\Controllers;

use App\ServiceRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function insert(Request $request){
        $rating = new ServiceRating();

        $rating->client_id          =  Auth::guard('clients')->user()->id;
        $rating->service_id         =  $request->service_id;
        $rating->value              =  $request->rating;

        $rating->save();

        return back()->with('message', ' Thank you for rating ');
    }
}
