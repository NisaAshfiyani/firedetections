@extends('layouts.app')

@section('title', 'BLOG - Fire Educations')

@section('contents')
<div class="container">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="content_1">Content 1</label>
            <textarea class="form-control" id="content_1" name="content_1"></textarea>
        </div>
        <div class="form-group">
            <label for="content_2">Content 2</label>
            <textarea class="form-control" id="content_2" name="content_2"></textarea>
        </div>
        <div class="form-group">
            <label for="content_3">Content 3</label>
            <textarea class="form-control" id="content_3" name="content_3"></textarea>
        </div>
        <div class="form-group">
            <label for="content_4">Content 4</label>
            <textarea class="form-control" id="content_4" name="content_4"></textarea>
        </div>
        <div class="form-group">
            <label for="youtube_url">YouTube URL</label>
            <input type="text" class="form-control" id="youtube_url" name="youtube_url">
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection