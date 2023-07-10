<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <!-- Form for editing the post -->
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </div>

        <button type="submit">Update Post</button>
    </form>
@endsection
