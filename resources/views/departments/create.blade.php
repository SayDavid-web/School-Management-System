@extends('layouts.app')
@section('title', 'Add Department')
@section('content')
<div class="card mx-auto" style="max-width:600px">
    <div class="card-header"><h5 class="m-0">Add Department</h5></div>
    <form method="POST" action="{{ route('departments.store') }}" class="card-body">
        @csrf @include('departments._form')
        <div class="mt-4 d-flex gap-2"><button class="btn btn-primary">Save</button>
            <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a></div>
    </form>
</div>
@endsection
