@extends('layouts.app')

@section('content')
    @if ($blogPost)
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $blogPost->title }}</h1>
                <p class="card-text">{{ $blogPost->content }}</p>

                <h2>Comments</h2>
                @if ($blogPost->comments)
                    @foreach($blogPost->comments as $comment)
                        <div class="card mb-2">
                            <div class="card-body">
                                <p class="card-text">{{ $comment->content }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No comments found.</p>
                @endif

                <h2>Add a Comment</h2>
                <form id="comment-form">
                    <input type="hidden" id="blog-post-id" value="{{ $blogPost->id }}">
                    <textarea id="comment-content" class="form-control mb-2" placeholder="Enter your comment"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @else
        <p>Blog post not found.</p>
    @endif
@endsection
