<!-- resources/views/history.blade.php -->
@extends('layouts.app')

@section('title', 'History Data - Fire Detections')

@section('contents')
<div class="container">
    {{-- <h1>History Data</h1> --}}
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Description</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detections as $detection)
            <tr>
                <td>{{ $detection->id }}</td>
                <td><img src="data:image/jpeg;base64,{{ base64_encode($detection->image) }}" alt="Image" width="100"></td>
                <td>{{ $detection->description }}</td>
                <td>{{ $detection->timestamp }}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection
