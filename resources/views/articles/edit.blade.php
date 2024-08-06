@extends('layouts.app')

@section('title', 'BLOG - Fire Educations')

@section('contents')

    <div class="container">
        <h1>Edit Article</h1>

        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="youtube_url">YouTube URL</label>
                <input type="url" class="form-control" id="youtube_url" name="youtube_url" value="{{ $article->youtube_url }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
