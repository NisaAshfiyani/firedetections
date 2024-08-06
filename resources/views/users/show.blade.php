@extends('layouts.app')

@section('title', 'Data User - Fire Detections')

@section('contents')
<div class="container">
    <h1>User Details</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ $user->role }}</p>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
