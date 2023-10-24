<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;

       return view('personal.post.index', compact('posts'));
    }
}
