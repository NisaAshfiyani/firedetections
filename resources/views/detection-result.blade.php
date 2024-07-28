{{-- //resources/views/dashboard.blade.php --}}
@extends('layouts.app')
  
@section('title', 'Upload - Fire Detections')
  
@section('contents')
<h1>Hasil Deteksi Kebakaran</h1>

    @if(isset($result['image_url']))
        <p>Deskripsi: {{ $result['descriptions'] }}</p>
        <p>Deteksi Kebakaran: {{ $result['detection_made'] ? 'Ya' : 'Tidak' }}</p>
        <img src="{{ asset($result['image_url']) }}" alt="Hasil Deteksi Gambar" style="width: 300px">
    @endif
    @endsection