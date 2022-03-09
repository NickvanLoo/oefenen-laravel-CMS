@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
     @foreach ($posts as $post)
        <div class="jumbotron">
            <h3>{{$post->title}}</h3>
            <small>Geschreven op {{$post->created_at}}</small>
     @endforeach
    @else
       <p>Er zijn geen posts gevonden</p> 
    @endif
@endsection