<!-- resources/views/monitoring.blade.php -->
@extends('layouts.app')

@section('title', 'Monitoring - Live Camera Feed')

@section('contents')
<div class="row">
    {{-- <h2>Live Camera Feed</h2> --}}
    <div id="video-container">
        {{-- <video id="live-video" autoplay playsinline></video> --}}
        <h1>Real-Time Video Stream from Flask API</h1>
    <img src="{{ url('http://127.0.0.1:5000/camera_feed') }}" width="640" height="480">
    </div>
</div>
@endsection