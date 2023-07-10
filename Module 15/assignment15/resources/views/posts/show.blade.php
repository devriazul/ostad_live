<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>

    <!-- Add delete button if necessary -->
    <!-- Form for deleting the post -->
    <!-- More post details if needed -->
@endsection
