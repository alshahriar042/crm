<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function userlist(){
        $users = User::get();
          return view('backend.chat.index',compact('users'));
     }


     public  function create($recipient)
     {
        $messages = DB::select(DB::raw('SELECT * FROM chats WHERE sender = ? AND recipient = ? OR recipient = ? AND sender = ?'), [
            auth()->id(),
            $recipient,
            auth()->id(),
            $recipient,
        ]);
        return view('backend.chat.create',['recipient' => User::find($recipient),
                   'message' => $messages
    ]);

     }


     public function index(Request $request)
    {
        $messages = DB::select(DB::raw('SELECT * FROM chats WHERE sender = ? AND recipient = ? OR recipient = ? AND sender = ?'), [
            auth()->id(),
            $request->recipient,
            auth()->id(),
            $request->recipient,
        ]);

        return response()->json([
            "message" => "All Messages",
            "data" => $messages,
        ]);
    }

    public function store(Request $request)
    {
// dd($request->all());

        $message = Chat::create([
            'sender' => Auth::id(),
            'recipient' => $request->recipient,
            'body' => $request->body,
        ]);


        notify()->success("SMS send successfully.", "Success");
        return back();
    }

}
