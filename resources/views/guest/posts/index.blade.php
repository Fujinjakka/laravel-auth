@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>BLOG</h1>
    <div class="row">
      <div class="col-4">
        <div class="card my-4">
          <img class="card-img-top" src="{{if !empty($post->img_path) ? asset('storage/' . $post->img_path) : asset('img/placeholder.jpg')}}" alt="">
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>

  </div>
    
@endsection