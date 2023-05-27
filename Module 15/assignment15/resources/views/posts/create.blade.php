<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <!-- Form for creating a new post -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content"></textarea>
        </div>

        <button type="submit">Create Post</button>
    </form>
@endsection
