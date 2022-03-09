@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Ga terug</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Geschreven op {{$post->created_at}}</small>
@endsection