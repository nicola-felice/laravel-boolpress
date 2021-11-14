@extends('layouts.app')

@section('content')
<div class="container" id="show_post">
  <h1>{{$post['title']}}</h1>
  <div>ID: {{$post['id']}}</div>
  <div class="author">{{$post['author']}}</div>  
  <p>{{$post['content']}}</p>
</div>
@endsection