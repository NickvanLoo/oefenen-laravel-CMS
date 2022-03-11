@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
     @foreach ($posts as $post)
        <div class="jumbotron">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Geschreven op {{$post->created_at}} door {{$post->user->name}}</small>
        </div>
     @endforeach
     {{$posts->links('pagination::bootstrap-5')}}
    @else
       <p>Er zijn geen posts gevonden</p> 
    @endif
@endsection