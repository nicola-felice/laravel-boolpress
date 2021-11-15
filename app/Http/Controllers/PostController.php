<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::where('id', $id)->first();

        return view('guest.show', compact('post'));
    }
}
