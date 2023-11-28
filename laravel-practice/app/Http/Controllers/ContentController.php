<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ContentController extends Controller
{
    public function content()
    {
        return view('content');
    }
}
