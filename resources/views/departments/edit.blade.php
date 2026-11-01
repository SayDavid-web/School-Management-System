@extends('layouts.app')
@section('title', 'Edit Department')
@section('content')
<div class="card mx-auto" style="max-width:600px">
    <div class="card-header"><h5 class="m-0">Edit Department #{{ $department->dept_id }}</h5></div>
    <form method="POST" action="{{ route('departments.update', $department) }}" class="card-body">
        @csrf @method('PUT') @include('departments._form')
        <div class="mt-4 d-flex gap-2"><button class="btn btn-success">Update</button>
            <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a></div>
    </form>
</div>
@endsection
