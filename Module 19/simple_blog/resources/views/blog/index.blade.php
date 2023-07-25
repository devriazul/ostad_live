@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>

    <div class="row">
        @foreach($blogPosts as $blogPost)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blogPost->title }}</h5>
                        <p class="card-text">{{ $blogPost->content }}</p>
                        <a href="{{ url("/blog-posts/{$blogPost->id}") }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
