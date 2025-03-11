@extends('welcome')

@section('content')

<h2>Create User</h2>

<a href="" class="btn btn-primary mt-2">Back</a>

<form action="" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fas fa-save"></i> Create User
</button>

@endsection
