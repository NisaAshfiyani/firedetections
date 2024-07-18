@extends('layouts.app')

@section('title', 'BLOG - Fire Educations')

@section('contents')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <iframe width="560" height="315" src="{{ ($post->youtube_url) }}" frameborder="0" allowfullscreen></iframe>
    <p class="card-text">{{ $post->content }}</p>
    @if($post->content_1)
        <p class="card-text">{{ $post->content_1 }}</p>
    @endif
    @if($post->content_2)
        <p class="card-text">{{ $post->content_2 }}</p>
    @endif
    @if($post->content_3)
        <p class="card-text">{{ $post->content_3 }}</p>
    @endif
    @if($post->content_4)
        <p class="card-text">{{ $post->content_4 }}</p>
    @endif
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection