@extends('layouts.app')
@section('title', 'Student Registration')
@section('content')
<div class="card mx-auto" style="max-width:800px">
    <div class="card-header"><h5 class="m-0"><i class="bi bi-mortarboard-fill"></i> Student Registration</h5></div>
    <form method="POST" action="{{ route('students.store') }}" class="card-body">
        @csrf
        @include('students._form')
        <div class="mt-4 d-flex gap-2">
            <button class="btn btn-primary">Submit Registration</button>
            <button type="reset" class="btn btn-secondary">Reset Form</button>
            <a href="{{ route('students.index') }}" class="btn btn-info text-white">View Student List</a>
        </div>
    </form>
</div>
@endsection
