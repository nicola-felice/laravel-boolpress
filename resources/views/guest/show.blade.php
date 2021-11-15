@extends('layouts.guest')

@section('MainContent')
  <div class="container">
    <h1 class="post-title">{{$post['title']}}</h1>
    <div class="author post-meta">{{$post['author']}}</div>  
    <p>{{$post['content']}}</p>
  </div>    
@endsection