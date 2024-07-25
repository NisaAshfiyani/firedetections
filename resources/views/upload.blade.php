{{-- //resources/views/dashboard.blade.php --}}
@extends('layouts.app')
  
@section('title', 'Dashboard - Fire Detections')
  
@section('contents')
<div class="container">  
    <h1>Upload Image for Fire Detection</h1>

    <form action="{{ url('/detect') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept="image/*">
        <button type="submit">Upload</button>
    </form>
@endsection