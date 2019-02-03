@extends('layouts.mien')
@section('show', 'active')
@section('body')
@section('showTitle', 'Show Item')

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

    <div class="card-img-top" style="background-image: url( 
        @unless($post->image)
            /storage/uploads/noImage.png
        @else 
            {{'/storage/uploads/images/'.$post->image}} 
        @endunless 
        )" alt="Card image cap">
    </div>

<div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->body}}</p>
    <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/y - h: i a')}} <i class="far fa-clock"></i></small></p>
    <div class="row">
        <a href="/posts/{{$post->id}}/edit" class="col">
            <button class="btn btn-info "><i class="far fa-edit"></i> Edit Item</button>
        </a>
        <form class="" action="/posts/{{$post->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger confirm_delete"><i class="fas fa-trash-alt"></i> Delete Item</button>&nbsp;&nbsp;&nbsp;
        </form>
    </div>
</div>


</div>
<button class="btn btn-light" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Go Back</button>


</div>
@endsection
@section('footer')
    @include('partials.footer')

    <script>
            $('.confirm_delete').click(function(){
                return confirm('Are you Shur');
            });
    </script>
@endsection






