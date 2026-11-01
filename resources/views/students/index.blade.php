@extends('layouts.app')
@section('title', 'Student Directory')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="m-0"><i class="bi bi-mortarboard-fill"></i> Student Directory</h3>
    <div><span class="badge bg-primary fs-6">{{ $totalStudents }} Students</span>
         <span class="badge bg-secondary fs-6">{{ $totalDepartments }} Departments</span></div>
</div>

<form method="GET" class="card card-body mb-3">
    <div class="row g-2">
        <div class="col-md-4"><input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by name, email, or department..."></div>
        <div class="col-md-3"><select name="dept_id" class="form-select">
            <option value="">All Departments</option>
            @foreach($departments as $d)<option value="{{ $d->dept_id }}" @selected(request('dept_id') == $d->dept_id)>{{ $d->dept_name }}</option>@endforeach
        </select></div>
        <div class="col-md-2"><select name="gender" class="form-select">
            <option value="">All Genders</option>
            <option @selected(request('gender')=='Male')>Male</option><option @selected(request('gender')=='Female')>Female</option>
        </select></div>
        <div class="col-md-2"><select name="sort" class="form-select">
            <option value="newest">Newest First</option><option value="oldest" @selected(request('sort')=='oldest')>Oldest First</option>
        </select></div>
        <div class="col-md-1 d-grid"><button class="btn btn-primary">Go</button></div>
    </div>
</form>

<div class="mb-2"><a href="{{ route('students.create') }}" class="btn btn-success"><i class="bi bi-person-plus"></i> Add Student</a>
    <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Clear</a></div>

<div class="card"><div class="table-responsive">
<table class="table table-hover align-middle mb-0">
    <thead class="table-light"><tr><th>ID</th><th>Student</th><th>Contact</th><th>Enrollment</th><th>Department</th><th class="text-end">Actions</th></tr></thead>
    <tbody>
    @forelse($students as $s)
        <tr>
            <td>{{ $s->student_id }}</td>
            <td><b>{{ $s->student_name }}</b><br><small class="text-muted">{{ $s->gender }}</small></td>
            <td>{{ $s->email }}<br><small class="text-muted">{{ $s->description ?? 'N/A' }}</small></td>
            <td>{{ $s->enrollment_date->format('M d, Y') }}<br><small class="text-muted">{{ $s->years_enrolled }} years</small></td>
            <td><span class="badge text-bg-primary">{{ $s->department->dept_name ?? 'N/A' }}</span></td>
            <td class="text-end">
                <a href="{{ route('students.show', $s) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <a href="{{ route('students.edit', $s) }}" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil"></i></a>
                <form method="POST" action="{{ route('students.destroy', $s) }}" class="d-inline" onsubmit="return confirm('Delete this student?')">
                    @csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="6" class="text-center text-muted py-4">No students found.</td></tr>
    @endforelse
    </tbody>
</table></div></div>
<div class="d-flex justify-content-between align-items-center mt-3">
    <small class="text-muted">Showing {{ $students->firstItem() ?? 0 }} to {{ $students->lastItem() ?? 0 }} of {{ $students->total() }} entries</small>
    {{ $students->links('pagination::bootstrap-5') }}
</div>
@endsection
