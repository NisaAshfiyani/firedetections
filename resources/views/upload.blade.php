{{-- //resources/views/dashboard.blade.php --}}
@extends('layouts.app')
  
@section('title', 'Upload - Fire Detections')
  
@section('contents')
<div class="container">  
    {{-- <h1>Upload Image for Fire Detection</h1> --}}

    <form action="{{ route('detect.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image">Pilih Gambar:</label>
        <input type="file" class="form-control-file" name="image" id="image" accept="image/*" required>
        <button type="submit" class="btn btn-primary">Unggah Gambar</button>
    </form>
@endsection