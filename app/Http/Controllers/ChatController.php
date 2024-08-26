<?php

namespace App\Http\Controllers;

use App\Events\ChatMessageSent;
use App\Events\UserJoined;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $username = $request->input("username");
        $message = $request->input("message");

        event(new ChatMessageSent($username, $message));
        return response()->json(["status" => "Message Sent"], 200);
    }

    public function newUserJoined(Request $request)
    {
       $username = $request->input("username");

        event (new UserJoined($username));
        return response()->json(["status" => "New User Joined"], 200);
    }
}
