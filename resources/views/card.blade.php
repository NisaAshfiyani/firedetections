<!-- resources/views/welcome.blade.php -->
{{-- @extends('app')

@section('title', 'Welcome')

@section('contents') --}}
<div class="container" style="padding: 20px">
    <h1>Fire Educations</h1>
<div class="col-lg-16">
    <!-- Featured blog post-->
    @foreach($articles as $article)
    <div class="card mb-4 bg-dark text-white">
        <div class="card-body">
            <div class="small text-muted"><p class="card-text">
                <small class="text-muted">
                    {{ $article->created_at->timezone('Asia/Jakarta')->format('d M Y, H:i') }}
                </small>
            </p></div>
            <h2 class="card-title h4">{{ $article->title }}</h2>
            <p class="card-text">{{ \Illuminate\Support\Str::limit($article->content, 150, $end='...') }}</p>
            <a class="btn btn-primary" href="{{ route('blog', $article->id) }}">Read more →</a>
        </div>
    </div>
    @endforeach
    
</div>
</div>
{{-- @endsection --}}
