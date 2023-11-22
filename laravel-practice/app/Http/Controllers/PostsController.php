<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {

      //  $post = \DB::table('posts')->where('slug',$slug)->first();
      $post = Post::where('slug',$slug)->firstOrFail();

        //dd($post); //inspect a variable and kill the execution

        // $posts = [
        //     '123' => '1',
        //     '321' => '2'
        // ];

        // if (!$post) {
        //     abort(404);
        // }

        return view('post', [
            'post' => $post
        ]);
    }
}


