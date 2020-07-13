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

        if (!Conversation::where('from', Auth::guard('clients')->user()->id)
                ->where('to', $admin->id)
                ->exists()
            &&
            !Conversation::where('from', $admin->id)
                ->where('to', Auth::guard('clients')->user()->id)
                ->exists()
        ) {
            $thread = new Conversation();
            $thread->from = Auth::id();
            $thread->to = $admin->id;
            $thread->status = 0;
            $thread->save();

            $threadId = $thread->id;

        } else {
            if (Conversation::where('from', Auth::guard('clients')->user()->id)
                ->where('to', $admin->id)
                ->exists()
            ) {

                $threadId = Conversation::where('from', Auth::guard('clients')->user()->id)->where('to', $admin->id)->value('id');

            } else {
                $threadId = Conversation::where('from', $admin->id)->where('to', Auth::guard('clients')->user()->id)->value('id');
            }

        }
        $messages = ConversationReply::with('client')->where('conversation_id', $threadId)->get();

        return view('client.message.index')->with([
            'messages'=>$messages,
            'admin' => $admin
        ]);
    }

    public function getMessages(Request $request)
    {
        $user_id = $request->user_id;

        if (!Conversation::where('from', Auth::guard('clients')->user()->id)
                ->where('to', $user_id)
                ->exists()
            &&
            !Conversation::where('from', $user_id)
                ->where('to', Auth::guard('clients')->user()->id)
                ->exists()
        ) {
            $thread = new Conversation();
            $thread->from = Auth::guard('clients')->user()->id;
            $thread->to = $user_id;
            $thread->status = 0;
            $thread->save();

            $threadId = $thread->id;

        } else {
            if (Conversation::where('from', Auth::guard('clients')->user()->id)
                ->where('to', $user_id)
                ->exists()
            ) {

                $threadId = Conversation::where('from', Auth::guard('clients')->user()->id)->where('to', $user_id)->value('id');

            } else {
                $threadId = Conversation::where('from', $user_id)->where('to', Auth::guard('clients')->user()->id)->value('id');
            }

        }
        $messages = ConversationReply::with('client')->where('conversation_id', $threadId)->get();
        $admin = User::first();
//        return response()->json([
//            'messages' => $messages,
//            'admin' => $admin
//        ]);
        return view('client.message.message')->with([
            'messages' => $messages,
            'admin' => $admin
        ]);
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

    public function statusUpdate(Request $request){
        $status = ConversationReply::where('to', Auth::guard('clients')->user()->id)->update(['status'=> 1]);
    }
}
