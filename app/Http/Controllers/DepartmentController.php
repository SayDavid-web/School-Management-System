<?php
namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $departments = Department::withCount('students')
            ->when($request->search, fn ($q, $s) => $q->where('dept_name', 'like', "%$s%"))
            ->orderBy('dept_id', 'desc')->paginate(10)->withQueryString();
        return view('departments.index', compact('departments'));
    }

    public function create() { return view('departments.create'); }

    public function store(Request $request)
    {
        Department::create($this->validated($request));
        return redirect()->route('departments.index')->with('success', 'Department created.');
    }

    public function edit(Department $department) { return view('departments.edit', compact('department')); }

    public function update(Request $request, Department $department)
    {
        $department->update($this->validated($request, $department));
        return redirect()->route('departments.index')->with('success', 'Department updated.');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Department deleted.');
    }

    private function validated(Request $r, ?Department $d = null): array
    {
        return $r->validate([
            'dept_name'   => ['required', 'string', 'max:255', Rule::unique('departments', 'dept_name')->ignore($d?->dept_id, 'dept_id')],
            'manager_id'  => 'nullable|integer',
            'location_id' => 'nullable|integer',
        ]);
    }
}
