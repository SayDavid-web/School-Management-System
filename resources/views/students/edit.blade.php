@extends('layouts.app')
@section('title', 'Edit Student')
@section('content')
<div class="card mx-auto" style="max-width:800px">
    <div class="card-header"><h5 class="m-0">Edit Student #{{ $student->student_id }}</h5></div>
    <form method="POST" action="{{ route('students.update', $student) }}" class="card-body">
        @csrf @method('PUT')
        @include('students._form')
        <div class="mt-4 d-flex gap-2">
            <button class="btn btn-success">Update</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
