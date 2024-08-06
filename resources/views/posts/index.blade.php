@extends('layouts.app')

@section('title', 'BLOG - Fire Educations')

@section('contents')
<div class="container">
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    @foreach($posts as $post)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection