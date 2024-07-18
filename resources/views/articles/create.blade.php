@extends('layouts.app')

@section('title', 'BLOG - Fire Educations')

@section('contents')
    <div class="container">
        <h1>Add Article</h1>

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="youtube_url">YouTube URL</label>
                <input type="url" class="form-control" id="youtube_url" name="youtube_url">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
