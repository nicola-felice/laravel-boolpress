@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="mt-3">Modifica Post</h1>
  <div class="mb-4">ID: {{$post['id']}}</div>

  <form action="{{route("admin.posts.update", $post['id'])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">  
      <label for="title">Titolo:</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$post['title']}}">
    </div>

    <div class="form-group">
      <label for="author">Autore:</label>
      <input type="text" class="form-control" id="author" name="author" value="{{$post['author']}}">
    </div>

    <div class="form-group">
      <label for="content">Descrizione</label>
      <textarea type="text" class="form-control" id="content" rows="13" name="content">{{$post['content']}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
  </form>
</div>
@endsection