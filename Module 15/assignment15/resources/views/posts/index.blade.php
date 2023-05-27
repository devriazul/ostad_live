<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add Post</a>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post->id) }}">Read More</a>
        </div>
    @endforeach
@endsection
