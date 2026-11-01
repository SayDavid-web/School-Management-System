<div class="mb-3"><label class="form-label">Department Name</label>
    <input type="text" name="dept_name" class="form-control" value="{{ old('dept_name', $department->dept_name ?? '') }}" required></div>
<div class="row g-3">
    <div class="col-md-6"><label class="form-label">Manager ID</label>
        <input type="number" name="manager_id" class="form-control" value="{{ old('manager_id', $department->manager_id ?? '') }}"></div>
    <div class="col-md-6"><label class="form-label">Location ID</label>
        <input type="number" name="location_id" class="form-control" value="{{ old('location_id', $department->location_id ?? '') }}"></div>
</div>
