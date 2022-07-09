<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->request->all();
        if ($request->request->get('message')){
            $comment = new Comments();

            $comment->message = $request->request->get('message');
            $comment->posts_id = $request->request->get('post_owner');

            $comment->save();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
