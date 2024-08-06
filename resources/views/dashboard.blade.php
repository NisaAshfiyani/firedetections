{{-- //resources/views/dashboard.blade.php --}}
@extends('layouts.app')
  
@section('title', 'Dashboard - Fire Detections')
  
@section('contents')
<div class="container">  
<div class="row">
  <h4>Unduh Aplikasi Telegram <a href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank">di sini.</a></h4>
<h4>Jika sudah memiliki aplikasi Telegram, scan kode QR atau buka link Bot FireDetections <a href="https://t.me/FireDetections_bot" target="_blank">di sini.</a></h4>
<img src="{{ asset('admin/img/dashboard.png') }}" alt="Image" class="dashboard-image" width="500">
  </div>
</div>
@endsection