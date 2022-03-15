<?php

namespace App\Http\Controllers\Chat\Customer_shop;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repository\Chat\Customers\ChatRepositoryInterface;
use App\Repository\UserRepository\UserInterfaceRepository;
use App\Repository\UserRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ChatController extends Controller
{

    public function index($id, ChatRepositoryInterface $repository){
        $users = User::where('id', '!=', Auth::User()->id)
            ->where('user_type', 'Boutique')->get();

//        foreach ($users as $user) {
//            if (Cache::has('user-is-online-' . $user->id))
//                dd($user->name . " is online. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>");
//            else
//                dd($user->name . " is offline. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>");
//        }

        return view('client.chat.customers.index')->with('users', $users);
    }

    public function create($id, ChatRepositoryInterface $repository, UserInterfaceRepository $userRepository){

        $users = $userRepository->getUserByIdAndByType(Auth::User()->id, "Boutique");

        $userById = $userRepository->getById($id);

        $messages = $repository->getById($id);

        if ($messages){
            return view('client.chat.customers.create', compact('messages', $messages))
                ->with('userById', $userById)
                ->with('users', $users);
        }
    }

    public function store(Request $request, ChatRepositoryInterface $repository, $id){
        $data = $request->validate([
            "message" => 'required',
        ]);


        $repository->store([$data, $id]);

        return redirect()->back()->with('success', "Your message has been successfully send");
    }
}
