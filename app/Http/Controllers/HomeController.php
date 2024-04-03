<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        //Modelos de Eloquent
        $post = Post::get();

        return view('welcome')->with('posts', $post);
    }
}
