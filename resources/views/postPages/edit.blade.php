@extends('layouts.mien')
@section('create', 'active')


@section('body')
<div class="">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Edit Item</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
</div>



<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        

    @endif


    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title Item</label>
            <input id="title" value="{{$post->title}}" name="title" class="form-control form-control-lg" type="text">
        </div>

        <div class="form-group">
            <label for="image">Image Item</label>
            <input id="image" value="{{$post->image}}" name="title" class="form-control form-control-lg" type="text">
        </div>
        

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="8">{{$post->body}}</textarea>
        </div>

 
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            </div>
        <br>

        <button class="btn btn-success form-control" >Save Item</button>
    <form action="">
            <br><br><br><br><br><br>
        
</div>

@endsection


@section('footer')
    @include('partials.footer')
@endsection