{{-- //resources/views/dashboard.blade.php --}}
@extends('layouts.app')
  
@section('title', 'Dashboard - Fire Detections')
  
@section('contents')
<div class="container">  
    <h1>Hasil Deteksi</h1>
    @if ($detection_made)
        <p>Api terdeteksi:</p>
        <ul>
            @foreach ($descriptions as $description)
                <li>{{ $description }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada api yang terdeteksi.</p>
    @endif
    <a href="{{ url('/upload') }}">Unggah file lain</a>
</div>
@endsection