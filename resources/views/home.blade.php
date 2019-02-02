@extends('layouts.mien')
@section('home', 'active')
@section('body')

<div class="">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Welcome Home</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
</div>
<div class="container">
<div class="row ">

    @foreach($posts as $post)
        <div class="col-lg-3 col-sm-6">
                <div class="card">
                        
                        <img src="https://via.placeholder.com/500X400" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title itemTitle">{{$post->title}}</h5>
                            <p class="card-text itemBody">{{$post->body}}</p>
                            <a href="/posts/{{$post->id}}" class="btn btn-primary">Open Item</a>
                        </div>
                 </div>
                 <br>
        </div>
        
        @endforeach
</div>
</div>
@endsection


@section('footer')
    @include('partials.footer')
@endsection