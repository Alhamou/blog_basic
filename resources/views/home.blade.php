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
        <div class="col-lg-3 col-sm-6 " title="{{$post->title}}" onclick="window.location.href = '/posts/{{$post->id}}'">
                <div class="card itemHome">
                       
                       <div class="card-img-top" style="background-image: url(
                            @unless($post->image)
                                /storage/uploads/noImage.png
                            @else
                                {{'/storage/uploads/images/'.$post->image}}
                            @endunless
                            )" alt="Card image cap">
                        </div>

                        <div class="card-body">
                        <h5 class="card-title itemTitle">{{$post->title}}</h5>
                            <p class="card-text itemBody">{{$post->body}}</p>
                            <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/y - h: i a')}}</small></p>

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