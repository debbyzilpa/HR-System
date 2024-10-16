@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px; font-family: 'Arial', sans-serif;">
    <h1 style="text-align: center; color: #34495e; font-weight: 300; margin-bottom: 30px;">Edit Catatan Karyawan</h1>
    <form action="{{ route('employee_records.update', $employeeRecord) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id_number">ID Number</label>
            <select name="id_number" id="id_number" class="form-control">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id_number }}" {{ $employeeRecord->id_number == $employee->id_number ? 'selected' : '' }}>
                        {{ $employee->full_name }} ({{ $employee->id_number }})
                    </option>
                @endforeach
            </select>
            @error('id_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="offense_type">Jenis Pelanggaran</label>
            <input type="text" name="offense_type" id="offense_type" class="form-control" value="{{ old('offense_type', $employeeRecord->offense_type) }}">
            @error('offense_type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="offense_date">Tanggal Pelanggaran</label>
            <input type="date" name="offense_date" id="offense_date" class="form-control" value="{{ old('offense_date', $employeeRecord->offense_date) }}">
            @error('offense_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $employeeRecord->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary" style="background: linear-gradient(135deg, #3498db, #2980b9); border: none; border-radius: 10px; padding: 12px 24px; color: #fff; text-decoration: none; font-size: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background 0.3s, box-shadow 0.3s;">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<style>
    .form-group label {
        font-weight: bold;
        font-size: 14px;
        margin-bottom: 8px;
    }
    .form-control {
        border-radius: 8px;
        border: 1px solid #ddd;
        padding: 12px;
        font-size: 14px;
        margin-bottom: 15px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    .text-danger {
        font-size: 12px;
        color: #e74c3c;
    }
</style>
@endsection
