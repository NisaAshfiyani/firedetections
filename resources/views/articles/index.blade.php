@extends('layouts.app')

@section('title', 'BLOG - Fire Educations')

@section('contents')
    <div class="container">
        {{-- <h1>Articles</h1> --}}
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Add Article</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Youtube Video</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->content }}</td>
                        <td>
                            @if($article->youtube_url)
                                <iframe width="200" height="113" src="{{ $article->youtube_url }}" frameborder="0" allowfullscreen></iframe>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
