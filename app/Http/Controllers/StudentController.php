<?php
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::with('department')
            ->when($request->search, fn ($q, $s) => $q->where(function ($w) use ($s) {
                $w->where('student_name', 'like', "%$s%")
                  ->orWhere('email', 'like', "%$s%")
                  ->orWhereHas('department', fn ($d) => $d->where('dept_name', 'like', "%$s%"));
            }))
            ->when($request->dept_id, fn ($q, $d) => $q->where('dept_id', $d))
            ->when($request->gender, fn ($q, $g) => $q->where('gender', $g))
            ->orderBy('student_id', $request->sort === 'oldest' ? 'asc' : 'desc')
            ->paginate(10)->withQueryString();

        return view('students.index', [
            'students'         => $students,
            'departments'      => Department::orderBy('dept_name')->get(),
            'totalStudents'    => Student::count(),
            'totalDepartments' => Department::count(),
        ]);
    }

    public function create()
    {
        return view('students.create', ['departments' => Department::orderBy('dept_name')->get()]);
    }

    public function store(Request $request)
    {
        Student::create($this->validated($request));
        return redirect()->route('students.index')->with('success', 'Student registered.');
    }

    public function show(Student $student) { return view('students.show', compact('student')); }

    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student, 'departments' => Department::orderBy('dept_name')->get()]);
    }

    public function update(Request $request, Student $student)
    {
        $student->update($this->validated($request, $student));
        return redirect()->route('students.index')->with('success', 'Student updated.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }

    private function validated(Request $r, ?Student $s = null): array
    {
        return $r->validate([
            'student_name'    => 'required|string|max:255',
            'email'           => ['required', 'email', Rule::unique('students', 'email')->ignore($s?->student_id, 'student_id')],
            'gender'          => 'required|in:Male,Female',
            'dob'             => 'nullable|date',
            'enrollment_date' => 'required|date',
            'dept_id'         => 'nullable|exists:departments,dept_id',
            'description'     => 'nullable|string',
        ]);
    }
}
