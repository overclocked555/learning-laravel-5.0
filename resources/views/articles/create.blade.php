@extends('app')

@section('content')
  <h1>Write a New article</h1>

  <hr/>


  {!! Form::open(['url' => 'articles']) !!}

  @include ('articles/form', ['submitButtonText' => 'Add Article'])

  {!! Form::close() !!}


@stop

@include ('errors/list')

@section('footer')
  
@stop