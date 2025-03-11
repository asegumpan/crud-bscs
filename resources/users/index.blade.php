@extends('welcome')


@section('content')
<h1>Users</h1>
<a href="" class="btn btn-secondary">
</a>

<a href="" class="btn btn-warning">
    <i class="fas fa-edit"></i> Edit
</a>

<form action="" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-trash"></i> Delete
    </button>
</form>


@endsection