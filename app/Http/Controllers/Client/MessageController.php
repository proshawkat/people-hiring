<?php

namespace App\Http\Controllers\Client;

use App\Conversation;
use App\ConversationReply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(){
        $admin = User::first();
        return view('client.message.index')->with(['admin' => $admin]);
    }

    public function send(Request $request){
        try {
            $conversation_id = "";
            if (!Conversation::where('from', Auth::guard('clients')->user()->id)
                    ->where('to', $request->to)
                    ->exists()
                &&
                !Conversation::where('from', $request->to)
                    ->where('to', Auth::guard('clients')->user()->id)
                    ->exists()
            ) {
                $conversation = new Conversation();
                $conversation->from = Auth::guard('clients')->user()->id;
                $conversation->to = $request->to;
                $conversation->status = 0;
                $conversation->save();

                $conversation_id = $conversation->id;
            } else {
                if (Conversation::where('from', Auth::guard('clients')->user()->id)
                    ->where('to', $request->to)
                    ->exists()
                ) {

                    $conversation_id = Conversation::where('from', Auth::guard('clients')->user()->id)->where('to', $request->to)->value('id');

                } else {
                    $conversation_id = Conversation::where('from', $request->to)->where('to', Auth::guard('clients')->user()->id)->value('id');
                }
            }


            $inbox = new ConversationReply();

            $inbox->conversation_id = $conversation_id;
            $inbox->user_id = Auth::guard('clients')->user()->id;
            $inbox->from = Auth::guard('clients')->user()->id;
            $inbox->message = $request->message;
            $inbox->to = $request->to;
            $inbox->status = 0;
            $inbox->save();
            return 'success';

        } catch (\Exception $exception) {

            return $exception->getMessage();

        }
    }
}
