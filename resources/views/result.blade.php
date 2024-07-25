{{-- //resources/views/dashboard.blade.php --}}
@extends('layouts.app')
  
@section('title', 'Dashboard - Fire Detections')
  
@section('contents')
<h1>Detection Results</h1>
    <p><strong>Detection Results:</strong></p>
    {{-- <ul>
        @foreach ($detectionResults as $result)
            <li>{{ $result }}</li>
        @endforeach
    </ul> --}}

    <p><strong>Descriptions:</strong></p>
    <ul>
        @foreach ($descriptions as $description)
            <li>{{ $description }}</li>
        @endforeach
    </ul>
    {{-- <img src="data:image/jpeg;base64,{{ base64_encode($detection->image) }}" alt="Image" width="100"></td> --}}

    {{-- <p><strong>Detection Made:</strong> {{ $detectionMade ? 'Yes' : 'No' }}</p> --}}
@endsection