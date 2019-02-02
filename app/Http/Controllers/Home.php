<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class Home extends Controller
{

    public function home()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

}
