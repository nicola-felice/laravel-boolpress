<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(15);

        return view('guest.index', compact('posts'));
    }
}
