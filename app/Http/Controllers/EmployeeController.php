<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\FamilyData;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('familyData')->get();
        return view('employee.index', compact('employees'));
    }

    public function archived()
    {
        $employees = Employee::onlyTrashed()->with('familyData')->get();
        $employees = Employee::where('status', 'Archived')->get();
        return view('employee.archived', compact('employees'));
    }
    public function show($id)
    {
        // Pastikan variabel $employee didefinisikan dengan benar
        $employee = Employee::findOrFail($id);

        // Pastikan variabel dikirim ke view
        return view('employee.show', ['employee' => $employee]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_number' => 'required|integer|unique:employees,id_number',
            'full_name' => 'required|string|max:255',
            'contract_date' => 'required|date',
            'work_date' => 'required|date',
            'status' => 'required|in:Aktif,Berhenti',
            'position' => 'required|string|max:255',
            'gender' => 'required|in:Pria,Wanita',
            'place_birth' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'religion' => 'required|string|max:255',
            'marital_status' => 'required|in:Menikah,Belum',
            'residence_address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address_emergency' => 'nullable|string|max:255',
            'phone_emergency' => 'nullable|string|max:20',
            'blood_type' => 'nullable|string|max:5',
            'last_education' => 'nullable|string|max:255',
            'agency' => 'nullable|string|max:255',
            'graduation_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'competency_training_place' => 'nullable|string|max:255',
            'organizational_experience' => 'nullable|string',
            'mate_name' => 'nullable|string|max:255',
            'child_name' => 'nullable|string|max:255',
            'wedding_date' => 'nullable|date',
            'marriage_certificate_number' => 'nullable|string|max:255',
        ]);

        $employee = Employee::create($request->except(['mate_name', 'child_name', 'wedding_date', 'marriage_certificate_number']));

        if ($request->marital_status === 'Menikah') {
            FamilyData::create([
                'id_number' => $employee->id_number,
                'mate_name' => $request->mate_name,
                'child_name' => $request->child_name,
                'wedding_date' => $request->wedding_date,
                'marriage_certificate_number' => $request->marriage_certificate_number,
            ]);
        }

        return redirect()->route('employee.create')->with('status', 'Data telah ditambahkan');
    }

    public function edit($id_number)
    {
        $employee = Employee::with('familyData')->where('id_number', $id_number)->firstOrFail();
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id_number)
    {
        $request->validate([
            'id_number' => ['required', 'integer', Rule::unique('employees')->ignore($id_number, 'id_number')],
            'full_name' => 'required|string|max:255',
            'contract_date' => 'required|date',
            'work_date' => 'required|date',
            'status' => 'required|in:Aktif,Berhenti',
            'position' => 'required|string|max:255',
            'gender' => 'required|in:Pria,Wanita',
            'place_birth' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'religion' => 'required|string|max:255',
            'marital_status' => 'required|in:Menikah,Belum',
            'residence_address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address_emergency' => 'nullable|string|max:255',
            'phone_emergency' => 'nullable|string|max:20',
            'blood_type' => 'nullable|string|max:5',
            'last_education' => 'nullable|string|max:255',
            'agency' => 'nullable|string|max:255',
            'graduation_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'competency_training_place' => 'nullable|string|max:255',
            'organizational_experience' => 'nullable|string',
            'mate_name' => 'nullable|string|max:255',
            'child_name' => 'nullable|string|max:255',
            'wedding_date' => 'nullable|date',
            'marriage_certificate_number' => 'nullable|string|max:255',
        ]);

        $employee = Employee::where('id_number', $id_number)->firstOrFail();
        $employee->update($request->except(['mate_name', 'child_name', 'wedding_date', 'marriage_certificate_number']));

        if ($request->marital_status === 'Menikah') {
            FamilyData::updateOrCreate(
                ['id_number' => $id_number],
                [
                    'mate_name' => $request->mate_name,
                    'child_name' => $request->child_name,
                    'wedding_date' => $request->wedding_date,
                    'marriage_certificate_number' => $request->marriage_certificate_number,
                ]
            );
        } else {
            FamilyData::where('id_number', $id_number)->delete();
        }

        return redirect()->route('employee.edit', ['id_number' => $id_number])->with('status', 'Data telah diperbarui');
    }

    public function destroy($id_number)
    {
        $employee = Employee::where('id_number', $id_number)->firstOrFail();
        $employee->delete();

        return redirect()->route('employee.index')->with('status', 'Data telah dihapus');
    }

    public function restore($id_number)
    {
        $employee = Employee::onlyTrashed()->where('id_number', $id_number)->firstOrFail();
        $employee->restore();

        return redirect()->route('employee.archived')->with('status', 'Data telah dipulihkan');
    }
}
