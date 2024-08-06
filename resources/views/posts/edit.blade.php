@extends('layouts.app')

@section('title', 'BLOG - Fire Educations')

@section('contents')
<div class="container">
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="content_1">Content 1</label>
            <textarea class="form-control" id="content_1" name="content_1">{{ $post->content_1 }}</textarea>
        </div>
        <div class="form-group">
            <label for="content_2">Content 2</textarea>
            <textarea class="form-control" id="content_2" name="content_2">{{ $post->content_2 }}</textarea>
        </div>
        <div class="form-group">
            <label for="content_3">Content 3</label>
            <textarea class="form-control" id="content_3" name="content_3">{{ $post->content_3 }}</textarea>
        </div>
        <div class="form-group">
            <label for="content_4">Content 4</label>
            <textarea class="form-control" id="content_4" name="content_4">{{ $post->content_4 }}</textarea>
        </div>
        <div class="form-group">
            <label for="youtube_url">YouTube URL</label>
            <input type="text" class="form-control" id="youtube_url" name="youtube_url" value="{{ $post->youtube_url }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection