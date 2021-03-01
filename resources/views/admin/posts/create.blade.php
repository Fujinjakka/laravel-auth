@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Crea un nuovo Post</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('POST')
  
      <div class="form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" id="text" name="title" value="{{old('title')}}">
      </div>
      <div class="form-group">
        <label for="body">Testo</label>
        <textarea class="form-control" type="text" id="body" name="body" rows="10">{{old('body')}}</textarea>
      </div>
      <div class="form-group">
        <label for="img_path">Immagine</label>
        <input class="form-control" type="file" id="img_path" name="img_path" accept="image/*">
      </div>
      <input class="btn btn-primary" type="submit" value="Salva">
    </form>
  </div>
    
@endsection