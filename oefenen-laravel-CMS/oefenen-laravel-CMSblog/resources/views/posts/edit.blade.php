@extends('layouts.app')

@section('content')
    <h1>Bewerk een post</h1>

    {{Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST'])}}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id'=>'body' ,'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{Form::close()}}
@endsection