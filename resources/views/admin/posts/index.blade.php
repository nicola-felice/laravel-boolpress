@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Posts:</h1>
  <table class="table mt-3">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th class="col-5" scope="col">title</th>
      <th scope="col">author</th>
      <th scope="col">content</th>
      <th scope="col">actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['author']}}</td>
      <td><div id="text_content">{{$post['content']}}</div></td>
      <td>
        <a href="{{route("admin.posts.show", $post["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
        <a href="{{route("admin.posts.edit", $post["id"])}}"><button type="button" class="btn btn-secondary mt-2">Modifica</button></a>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection