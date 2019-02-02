<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class Posts extends Controller
{
    public function getPostes(){
       $data = Post::all();
       return view('postPages.home', compact('data'));
    }

}
