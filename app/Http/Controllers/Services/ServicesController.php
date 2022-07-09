<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Repository\MediaService\MediaServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ServicesController extends Controller
{
    private $mediaService;
    public function __construct(MediaServiceInterface $mediaService)
    {
        $this->mediaService = $mediaService;
    }

    public function index()
    {
        $mediaService = $this->mediaService->showByServiceUser();

        return view('livewire.services.index', compact('mediaService'));
    }

    public function profile()
    {
        return view('livewire.services.profile');
    }

    public function user_profile()
    {
        $mediaService = $this->mediaService->showByServiceUser();

        $user_posts = DB::table('posts')->where('author', Auth::user()->id)->get();
//        dd($user_posts);
        return view('livewire.services.my-profile')
            ->with('user_post', $user_posts)
            ->with('mediaService', $mediaService);
    }

    public function user_password_change(Request $request)
    {

        $data = $this->validate($request, [
            'old-password' => 'required',
            'new-password' => 'required',
            'repeat-password' => 'required'
        ]);
        $user_password = auth()->user()->getAuthPassword();


        if (Hash::check($data['old-password'], $user_password) && $data['new-password'] === $data['repeat-password'])
        {
            $user = \auth()->user();
            $user->forceFill([
                'password' => Hash::make($data['new-password']),
            ]);

            Auth::login($user);

            $user->save();
            return redirect()->back();
        }
    }


    public function profile_image_change(Request $request)
    {
        if ($request->file('profile_image')->isValid()) {

            $file = $request->file('profile_image');

            $user = Auth::user();

            $user->profile_photo_path = $file->store('images/profile/cover', 'public');

            $user->save();

            return redirect()->back();
        }
    }


    public function cover_image_change(Request $request)
    {
        if ($request->file('cover_image')->isValid()) {

            $file = $request->file('cover_image');

            $user = Auth::user();

            $user->cover_photo_path = $file->store('images/profile/cover', 'public');

            $user->save();

            return redirect()->back();
        }
    }
}
