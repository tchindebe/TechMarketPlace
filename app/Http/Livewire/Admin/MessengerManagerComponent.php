<?php


namespace App\Http\Livewire\Admin;


use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MessengerManagerComponent extends Component
{
    public function index(){
        $users = User::where('user_type', "!=", "Admin")->get();

        return view('livewire.admin.Messenger.index', compact('users'))
            ->layout('layouts.app');
    }

    public function getById($username){
        $chatUser = User::where('username', $username)
            ->first();

        $messages = Chat::where('from', Auth::User()->id)
            ->where('to',$chatUser->id)
            ->orwhere('from', $chatUser->id)
            ->where('to', Auth::User()->id)
            ->get();

        return view('livewire.admin.Messenger.show', compact('chatUser', 'messages'))
            ->layout('layouts.app');
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
