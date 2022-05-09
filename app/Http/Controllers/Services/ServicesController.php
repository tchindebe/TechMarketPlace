<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ServicesController extends Controller
{
    public function index()
    {
        return view('livewire.services.index');
    }


    public function profile()
    {
        return view('livewire.services.profile');
    }


    public function user_profile()
    {
        $user_posts = DB::table('posts')->where('author', Auth::user()->id)->get();
//        dd($user_posts);
        return view('livewire.services.my-profile')
            ->with('user_post', $user_posts);
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

            $destination = public_path()."\medias\profile_".str_replace(' ', '', auth()->user()->username);

            if (!is_dir($destination)) {  mkdir($destination,777,true);  }
            File::put($destination, $request->file('profile_image'));
            return response()->download($destination.$file);
        }
    }


    public function cover_image_change(Request $request)
    {
        if ($request->file('cover_image')->isValid()) {

            $file = $request->file('cover_image');

            $destination = public_path()."\medias\profile_".str_replace(' ', '', auth()->user()->username);

            if (!is_dir($destination)) {  mkdir($destination,777,true);  }
            File::put($destination, $request->file('cover_image'));
            return response()->download($destination.$file);
        }
    }
}
