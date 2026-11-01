@extends('layouts.app')
@section('title', 'Departments')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3 class="m-0">Departments</h3>
    <a href="{{ route('departments.create') }}" class="btn btn-success"><i class="bi bi-plus-lg"></i> Add Department</a>
</div>
<form method="GET" class="input-group mb-3">
    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search department name...">
    <button class="btn btn-primary">Search</button>
</form>
<div class="card"><table class="table table-hover align-middle mb-0">
    <thead class="table-light"><tr><th>ID</th><th>Department Name</th><th>Manager ID</th><th>Location ID</th><th>Students</th><th class="text-end">Actions</th></tr></thead>
    <tbody>
    @forelse($departments as $d)
        <tr>
            <td>{{ $d->dept_id }}</td><td>{{ $d->dept_name }}</td><td>{{ $d->manager_id ?? 'N/A' }}</td>
            <td>{{ $d->location_id ?? 'N/A' }}</td><td><span class="badge text-bg-info">{{ $d->students_count }}</span></td>
            <td class="text-end">
                <a href="{{ route('departments.edit', $d) }}" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil"></i></a>
                <form method="POST" action="{{ route('departments.destroy', $d) }}" class="d-inline" onsubmit="return confirm('Delete this department?')">
                    @csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="6" class="text-center text-muted py-4">No departments found.</td></tr>
    @endforelse
    </tbody>
</table></div>
<div class="mt-3">{{ $departments->links('pagination::bootstrap-5') }}</div>
@endsection
