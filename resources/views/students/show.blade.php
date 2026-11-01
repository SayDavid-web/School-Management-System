@extends('layouts.app')
@section('title', 'Student Detail')
@section('content')
<div class="card mx-auto" style="max-width:700px">
    <div class="card-header"><h5 class="m-0">{{ $student->student_name }}</h5></div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>ID:</b> {{ $student->student_id }}</li>
        <li class="list-group-item"><b>Email:</b> {{ $student->email }}</li>
        <li class="list-group-item"><b>Gender:</b> {{ $student->gender }}</li>
        <li class="list-group-item"><b>DOB:</b> {{ $student->dob?->format('M d, Y') ?? 'N/A' }}</li>
        <li class="list-group-item"><b>Enrollment:</b> {{ $student->enrollment_date->format('M d, Y') }} ({{ $student->years_enrolled }} yrs)</li>
        <li class="list-group-item"><b>Department:</b> {{ $student->department->dept_name ?? 'N/A' }}</li>
        <li class="list-group-item"><b>Info:</b> {{ $student->description ?? 'N/A' }}</li>
    </ul>
    <div class="card-footer"><a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a></div>
</div>
@endsection
