<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Conversation;
use App\ConversationReply;
use App\User;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::get();
        return view('admin.client.index')->with(['clients' => $clients]);
    }

    public function messageIndex($id){
        $clients = Client::find($id);

        if (!Conversation::where('from', Auth::id())
                ->where('to', $id)
                ->exists()
            &&
            !Conversation::where('from', $id)
                ->where('to', Auth::id())
                ->exists()
        ) {
            $thread = new Conversation();
            $thread->from = Auth::id();
            $thread->to = $id;
            $thread->status = 0;
            $thread->save();

            $threadId = $thread->id;

        } else {
            if (Conversation::where('from', Auth::id())
                ->where('to', $id)
                ->exists()
            ) {

                $threadId = Conversation::where('from', Auth::id())->where('to', $id)->value('id');

            } else {
                $threadId = Conversation::where('from', $id)->where('to', Auth::id())->value('id');
            }

        }
        $messages = ConversationReply::with('client')->where('conversation_id', $threadId)->get();

        return view('admin.client.message_index')->with([
            'messages'=>$messages,
            'clients' => $clients
        ]);
    }

    public function getMessages(Request $request)
    {
        $user_id = $request->user_id;

        if (!Conversation::where('from', Auth::id())
                ->where('to', $user_id)
                ->exists()
            &&
            !Conversation::where('from', $user_id)
                ->where('to', Auth::id())
                ->exists()
        ) {
            $thread = new Conversation();
            $thread->from = Auth::id();
            $thread->to = $user_id;
            $thread->status = 0;
            $thread->save();

            $threadId = $thread->id;

        } else {
            if (Conversation::where('from', Auth::id())
                ->where('to', $user_id)
                ->exists()
            ) {

                $threadId = Conversation::where('from', Auth::id())->where('to', $user_id)->value('id');

            } else {
                $threadId = Conversation::where('from', $user_id)->where('to', Auth::id())->value('id');
            }

        }
        $messages = ConversationReply::with('client')->where('conversation_id', $threadId)->get();

        return view('admin.client.message')->with([
            'messages' => $messages
        ]);
    }

    public function send(Request $request){
        try {

            $threadId = "";

            if (!Conversation::where('from', Auth::id())
                    ->where('to', $request->to)
                    ->exists()
                &&
                !Conversation::where('from', $request->to)
                    ->where('to', Auth::id())
                    ->exists()
            ) {
                $thread = new Conversation();
                $thread->from = Auth::id();
                $thread->to = $request->to;
                $thread->status = 0;
                $thread->save();

                $threadId = $thread->id;
            } else {
                if (Conversation::where('from', Auth::id())
                    ->where('to', $request->to)
                    ->exists()
                ) {

                    $threadId = Conversation::where('from', Auth::id())->where('to', $request->to)->value('id');

                } else {
                    $threadId = Conversation::where('from', $request->to)->where('to', Auth::id())->value('id');
                }
            }

            $inbox = new ConversationReply();

            $inbox->conversation_id = $threadId;
            $inbox->user_id = Auth::id();
            $inbox->from = Auth::id();
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
