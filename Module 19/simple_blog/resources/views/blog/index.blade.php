@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>

    @foreach($blogPosts as $blogPost)
        <div class="blog-post">
            <h2>{{ $blogPost->title }}</h2>
            <p>{{ $blogPost->content }}</p>
            <a href="{{ url("/blog-posts/{$blogPost->id}") }}">Read More</a>
        </div>
    @endforeach
@endsection
