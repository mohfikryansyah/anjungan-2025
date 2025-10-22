<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $valid = $request->validate([
            'model' => ['required'],
            'nama' => ['required'],
            'telepon' => ['required'],
            'ulasan' => ['required']
        ]);
        Comment::create($valid);
        return back();
    }
}
