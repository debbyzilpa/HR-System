<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeRecord;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $activeEmployees = Employee::where('status', 'Aktif')->count();
        $employeesOnLeave = Employee::where('status', 'Cuti')->count();
        $newEmployees = Employee::whereDate('created_at', '>=', now()->subMonth())->count();


        return view('dashboard', compact('totalEmployees', 'activeEmployees', 'employeesOnLeave', 'newEmployees'));
    }

    public function showAbsences()
    {
        // Logic untuk menampilkan data ketidakhadiran
    }

    public function showGrades()
    {
        // Logic untuk menampilkan data nilai karyawan
    }
}
