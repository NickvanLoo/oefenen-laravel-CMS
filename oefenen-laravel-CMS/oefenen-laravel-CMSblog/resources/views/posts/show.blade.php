@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Ga terug</a>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Geschreven op {{ $post->created_at }} door {{ $post->user->name }}</small>
    <hr>
    @if (!Auth::user()->id == $post->user_id)
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-end']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    @endif
@endsection
