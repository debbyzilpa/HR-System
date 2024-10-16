<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeRecordController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', function () {
    return redirect('/login')->with('success', 'Anda telah logout.');
})->name('logout');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Home route
Route::get('/', function () {
    return view('dashboard');
})->name('home');

// Other routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Employee routes
Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/{id_number}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('employee/{id_number}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/{id_number}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('employee/{id_number}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::post('employee/{id_number}/restore', [EmployeeController::class, 'restore'])->name('employee.restore');

// Employee Record routes
Route::get('employee_records', [EmployeeRecordController::class, 'index'])->name('employee_records.index');
Route::get('employee_records/create', [EmployeeRecordController::class, 'create'])->name('employee_records.create');
Route::post('employee_records', [EmployeeRecordController::class, 'store'])->name('employee_records.store');
Route::get('employee_records/{id}/edit', [EmployeeRecordController::class, 'edit'])->name('employee_records.edit');
Route::put('employee_records/{id}', [EmployeeRecordController::class, 'update'])->name('employee_records.update');
Route::delete('employee_records/{id}', [EmployeeRecordController::class, 'destroy'])->name('employee_records.destroy');

Route::get('employee/archived', [EmployeeController::class, 'archived'])->name('employee.archived');
Route::patch('employee/{id_number}/archived', [EmployeeController::class, 'archive'])->name('employee.archived');
Route::get('employee/archived', [EmployeeController::class, 'archived'])->name('employee.archived');
Route::patch('employee/{id_number}/archived', [EmployeeController::class, 'archived'])->name('employee.archived');
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->name('employee.show');


