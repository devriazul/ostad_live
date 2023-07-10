@extends('layouts.app')

@section('content')
    <h1>{{ $blogPost->title }}</h1>
    <p>{{ $blogPost->content }}</p>

    <h2>Comments</h2>
    @foreach($blogPost->comments as $comment)
        <div class="comment">
            <p>{{ $comment->content }}</p>
        </div>
    @endforeach

    <h2>Add a Comment</h2>
    <form id="comment-form">
        <input type="hidden" id="blog-post-id" value="{{ $blogPost->id }}">
        <textarea id="comment-content" placeholder="Enter your comment"></textarea>
        <button type="submit">Submit</button>
    </form>

    <a href="{{ route('blog-posts.create') }}">Add Blog</a>
@endsection
