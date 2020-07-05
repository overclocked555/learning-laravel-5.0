
@extends('app')

@section('content')

  <h1>About me: </h1>

  <h3>People I Like:</h3>
  @if (count ($people))
  <ul>
      @foreach ($people as $person)
      <li>{{ $person }}</li>
      @endforeach
  </ul>
  @endif




<p>Мне как новичку в Laravel и MVC важно работать именно с той версией Laravel, которая показана  в уроке, чтобы не было даже минимальных различий.
В этом уроке Laravel 5.0, не совместим с PHP 7. В Ubuntu 20.04 по умолчанию устанавливается PHP 7, необходимо подключить сторонний репозиторий для PHP 5.6</p>
@stop