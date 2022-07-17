<?php

namespace App\Http\Controllers\Chat\shop;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessengerController extends Controller
{
    public function index(){

        $users = User::where('id', '!=', Auth::user()->id)->get();

        return view('Messenger.index', compact('users'));
    }

    public function getByUsername($username){

        $users = User::where('id', '!=', Auth::user()->id)
            ->where('username', '!=', $username)
            ->get();

        $chatUser = User::where('username', $username)
            ->first();

        $messages = Chat::where('from', Auth::User()->id)
            ->where('to',$chatUser->id)
            ->orwhere('from', $chatUser->id)
            ->where('to', Auth::User()->id)
            ->get();

        foreach ($messages as $items){
            if ($items->status == 0){
                $items->update([
                    "status" => 1
                ]);
            }
        }

        return view('Messenger.chat', compact('users', 'chatUser', 'messages'));
    }

    public function sendMessage($id, Request $request){

        $data = $request->validate([
            "message" => 'required'
        ]);

        $chat = new Chat();

        $chat->create([
            'message' => $data['message'],
            'from' => Auth::user()->id,
            'to' => $id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->back();
    }
}
