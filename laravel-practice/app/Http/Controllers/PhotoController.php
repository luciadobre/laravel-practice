<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function redirectToRandomPhoto()
    {
        return redirect('https://source.unsplash.com/random');
    }
}
