<!-- resources/views/detections.blade.php -->
@extends('layouts.app')
  
@section('title', 'Dashboard - Fire Detections')
  
@section('contents')
<div class="container"> 
<h1>Detections</h1>
@foreach($detections as $detection)
    <div>
        <img src="data:image/jpeg;base64,{{ $detection['image'] }}" alt="Detected Image">
        <p>{{ $detection['description'] }}</p>
        <p>{{ $detection['timestamp'] }}</p>
    </div>
@endforeach
@endsection
