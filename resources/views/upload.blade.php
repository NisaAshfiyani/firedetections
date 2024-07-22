{{-- //resources/views/dashboard.blade.php --}}
@extends('layouts.app')
  
@section('title', 'Dashboard - Fire Detections')
  
@section('contents')
<div class="container">  
    <h1>Unggah File</h1>
    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Unggah</button>
    </form>
</div>
@endsection