@extends('layouts.app')

@section('content')
    @if ($blog)
        <div class="card mb-4">
            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="Blog Image" style="height:400px">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->content }}</p>
                <p class="card-text">Published by: <b>{{ $blog->author }}</b></p>
                <p class="card-text">Published Date: <i>{{ $blog->publish_date }}</i></p>
            </div>
        </div>

        <h5>Comments</h5>
        <div class="mb-4">
            <form action="{{ route('blogs.comments.store', $blog->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="content" class="form-control" placeholder="Enter your comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
        </div>
        <div class="mb-4">
            @foreach ($blog->comments as $comment)
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">{{ $comment->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Blog not found.</p>
    @endif
@endsection
