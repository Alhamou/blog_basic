@extends('layouts.mien')
@section('create', 'active')


@section('body')
<div class="">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Create new Item</h1>
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
        <input name="title" class="form-control form-control-lg" type="text" placeholder="Title Item">
        <br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>

        <br>
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

        <button class="btn btn-success form-control" >Add new Item</button>
    <form action="">
            <br><br><br><br><br><br>
        
</div>

@endsection


@section('footer')
    @include('partials.footer')
@endsection