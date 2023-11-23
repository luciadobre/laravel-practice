<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function getBySlug($slug)
    {
        return DB::table('posts')->where('slug', $slug)->first();
    }
}
