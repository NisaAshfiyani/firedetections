<!-- resources/views/welcome.blade.php -->
@extends('app')

@section('title', 'BLOG')

@section('contents')
<div class="container">
    <p class="card-text">
        <small class="text-muted">
            {{ $article->created_at->timezone('Asia/Jakarta')->format('d M Y, H:i') }}
        </small>
    </p>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    @if($article->youtube_url)
        <iframe width="560" height="315" src="{{ $article->youtube_url }}" frameborder="0" allowfullscreen></iframe>
    @endif
</div>
@endsection