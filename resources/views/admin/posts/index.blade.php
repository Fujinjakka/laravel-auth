@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>I miei Post</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Titolo</th>
          <th>Data Creazione</th>
          <th style="width: 150px">Immagine</th>
          <th colspan="3"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->created_at->format('Y-m-d')}}</td>
            @if (!empty($post->img_path))
              <td><img class="img-fluid" src="{{asset('storage/' . $post->img_path)}}" alt="{{$post->title}}"></td>
            @elseif(empty($post->img_path))
              <td><img class="img-fluid" src="{{asset('img/placeholder.png')}}" alt="{{$post->title}}" style="width: 50px"></td> 
           @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>   
@endsection