<?php

namespace App\Repository\Chat\Customers;

use App\Models\Chat;
use App\Models\Ordereds;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Util\ArrayCollection;

class AdaptorEloquentChat implements ChatRepositoryInterface{

    public function getById(int $id)
    {
        $messages = Chat::where('from', Auth::User()->id)
            ->where('to',$id)
            ->orwhere('from', $id)
            ->where('to', Auth::User()->id)
            ->get();

        return $messages;
    }

    public function store(array $data)
    {
        $chat = new Chat();

        $chat->create([
            'message' => $data['0']['message'],
            'from' => Auth::user()->id,
            'to' => $data['1'],
            'user_id' => Auth::user()->id,
        ]);

        return true;
    }

    public function remove(int $id)
    {
        // TODO: Implement remove() method.
    }
}
