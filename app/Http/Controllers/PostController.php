<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postPages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $post = new Post;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000' // max 10000kb
        ]);


        if($request->hasFile('image')){

            $file = $request->file('image');
            $extn = $file->getClientOriginalExtension();
            $name = time() .'.'. $extn;
            $path = $file->storeAs('public/uploads/images',$name);

            $post->image = $name; # add Image name to Database.
        }


        $post->title = $request->title;
        $post->body = $request->body;
        
        $post->save();

        return redirect('/');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::find($post)->first();
       
        return view('postPages.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {   
        $post = Post::find($post)->first();

        return view('postPages.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        return "<h1>Up</h1>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {       
   
        Post::find($post->id)->delete();
        return redirect('/');
    }
}
