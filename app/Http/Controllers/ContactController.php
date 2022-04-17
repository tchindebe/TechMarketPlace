<?php

namespace App\Http\Controllers;



use App\Models\Contacts;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'firstName' =>'required',
            'lastName' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($data)
        {
            Contacts::create($data);
            session()->flash('success', 'Your message sent successfully');
            return view('contact');
        }

        return view('contact');
    }
}
