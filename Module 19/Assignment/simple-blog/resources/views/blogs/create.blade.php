@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" name="image" class="form-control" id="image" required>
                </div>
                <div class="form-group">
                    <label for="publish_date">Publish Date</label>
                    <input type="datetime-local" name="publish_date" class="form-control" id="publish_date" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" id="author" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Blog</button>
            </form>
        </div>
    </div>
@endsection
