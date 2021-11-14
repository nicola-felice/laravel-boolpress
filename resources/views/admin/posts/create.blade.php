@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="mt-3">Crea Nuovo Post</h1>

  <form action="{{route("admin.posts.store")}}" method="POST">
    @csrf

    <div class="form-group">  
      <label for="title">Titolo:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="titolo">
    </div>

    <div class="form-group">
      <label for="author">Autore:</label>
      <input type="text" class="form-control" id="author" name="author" placeholder="nome autore">
    </div>

    <div class="form-group">
      <label for="content">Articolo:</label>
      <textarea type="text" class="form-control" id="content" rows="13" name="content" placeholder="some text"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Crea</button>
  </form>
</div>
@endsection