<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ContentController extends Controller
{
    public function content()
    {
        $post = Post::find(1);

        return view('content', compact('post'));
    }
}
