<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeRecord;
use App\Models\Employee;

class EmployeeRecordController extends Controller
{
    public function index()
    {
        $records = EmployeeRecord::all();
        return view('employee_records.index', compact('records'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('employee_records.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_number' => 'required|exists:employees,id_number',
            'offense_type' => 'required|string',
            'offense_date' => 'required|date',
            'description' => 'required|string',
        ]);

        EmployeeRecord::create($request->all());

        return redirect()->route('employee_records.index')
                         ->with('status', 'Record successfully created!');
    }

    public function edit($id)
    {
        $employeeRecord = EmployeeRecord::findOrFail($id);
        $employees = Employee::all();
        return view('employee_records.edit', compact('employeeRecord', 'employees'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_number' => 'required|exists:employees,id_number',
            'offense_type' => 'required|string',
            'offense_date' => 'required|date',
            'description' => 'required|string',
        ]);

        $employeeRecord = EmployeeRecord::findOrFail($id);
        $employeeRecord->update($request->all());

        return redirect()->route('employee_records.index')
                         ->with('status', 'Record successfully updated!');
    }

    public function destroy($id)
    {
        $employeeRecord = EmployeeRecord::findOrFail($id);
        $employeeRecord->delete();

        return redirect()->route('employee_records.index')
                         ->with('status', 'Record successfully deleted!');
    }
}
