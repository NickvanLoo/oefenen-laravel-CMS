@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img width="50%" src="/storage/cover_images/{{$post->cover_image}}"/>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Geschreven op {{ $post->created_at }} door {{ $post->user->name }}</small>
                    </div>
                    </div>
                </div>
        @endforeach
        {{ $posts->links('pagination::bootstrap-5') }}
    @else
        <p>Er zijn geen posts gevonden</p>
    @endif
@endsection
