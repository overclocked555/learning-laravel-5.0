@extends('app')

@section('content')
  <h1>Articles</h1>
  @foreach ($articles as $article)
      <a href="/articles/{{ $article->id }}"> <h2>{{ $article->title }}</h2></a>
      <div class="body">{{ $article->body }}</div>
    @endforeach
@stop

@section('footer')
  
@stop