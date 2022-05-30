<div class="container text-center bg-primary">

</div>

@extends('layouts.app')


@section('content')

<div class="w-50 mx-auto">
   
    <div class="card mb-3">
        <img class="card-img-top" src="{{$post->img_url}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->content}}</p>
          <p class="card-text"><small class="text-muted">{{$post->author}}</small></p>
        </div>
      </div>
    
</div>

@endsection