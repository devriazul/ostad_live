@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @foreach($posts as $post)
    <div class="card mb-3">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            <p class="card-text">{{ $post->content }}</p>
            <p class="card-text">Category: {{ $post->category->name }}</p>
        </div>
    </div>
    @endforeach

    <h1>Categories</h1>
    @foreach($categories as $category)
    <div class="card mb-3">
        <div class="card-body">
            <h3 class="card-title">{{ $category->name }}</h3>
            <p class="card-text">Latest Post: {{ $category->latestPost->title }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
