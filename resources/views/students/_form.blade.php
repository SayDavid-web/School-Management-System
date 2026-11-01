<div class="row g-3">
    <div class="col-md-6"><label class="form-label">Student Name</label>
        <input type="text" name="student_name" class="form-control" value="{{ old('student_name', $student->student_name ?? '') }}" required></div>
    <div class="col-md-6"><label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $student->email ?? '') }}" required></div>
    <div class="col-md-4"><label class="form-label">Gender</label>
        <select name="gender" class="form-select" required>
            <option value="">-- Select --</option>
            @foreach(['Male','Female'] as $g)
                <option value="{{ $g }}" @selected(old('gender', $student->gender ?? '') === $g)>{{ $g }}</option>
            @endforeach
        </select></div>
    <div class="col-md-4"><label class="form-label">Date of Birth</label>
        <input type="date" name="dob" class="form-control" value="{{ old('dob', isset($student) ? $student->dob?->format('Y-m-d') : '') }}"></div>
    <div class="col-md-4"><label class="form-label">Enrollment Date</label>
        <input type="date" name="enrollment_date" class="form-control" value="{{ old('enrollment_date', isset($student) ? $student->enrollment_date->format('Y-m-d') : '') }}" required></div>
    <div class="col-12"><label class="form-label">Department</label>
        <select name="dept_id" class="form-select">
            <option value="">-- Select Department --</option>
            @foreach($departments as $d)
                <option value="{{ $d->dept_id }}" @selected(old('dept_id', $student->dept_id ?? '') == $d->dept_id)>{{ $d->dept_name }}</option>
            @endforeach
        </select></div>
    <div class="col-12"><label class="form-label">Additional Information</label>
        <textarea name="description" rows="3" class="form-control">{{ old('description', $student->description ?? '') }}</textarea></div>
</div>
