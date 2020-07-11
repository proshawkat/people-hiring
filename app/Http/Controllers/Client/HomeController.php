<?php

namespace App\Http\Controllers\Client;

use App\ConversationReply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('client.home');
    }
}
