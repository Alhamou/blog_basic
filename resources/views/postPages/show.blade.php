@extends('layouts.mien')
@section('show', 'active')
@section('body')


@section('body')
    
<div class="">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
                <h1 class="display-4">Show Item Hear</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent. This is a modified jumbotron that occupies the entire horizontal space of its parent.

                    </p>
        </div>
    </div>
</div>

<div class="container">
<div class="card mb-3">
<img class="card-img-top" src="https://via.placeholder.com/856X180" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->body}}</p>
    <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
</div>
</div>
</div>

@section('footer')
    @include('partials.footer')
@endsection



@endsection


