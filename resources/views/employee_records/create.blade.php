@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
        <h1 style="text-align: center; color: #333; font-family: Arial, sans-serif; margin-bottom: 20px;">Catatan Karyawan</h1>
        <form action="{{ route('employee_records.store') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="id_number" style="display: block; font-weight: bold; color: #555; margin-bottom: 5px;">NIP</label>
                <select name="id_number" id="id_number" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id_number }}">{{ $employee->id_number }} - {{ $employee->full_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="offense_type" style="display: block; font-weight: bold; color: #555; margin-bottom: 5px;">Jenis Pelanggaran</label>
                <input type="text" name="offense_type" id="offense_type" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="offense_date" style="display: block; font-weight: bold; color: #555; margin-bottom: 5px;">Tanggal Pelanggaran</label>
                <input type="date" name="offense_date" id="offense_date" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="description" style="display: block; font-weight: bold; color: #555; margin-bottom: 5px;">Keterangan</label>
                <textarea name="description" id="description" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; height: 100px;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 10px; background-color: #007bff; border: none; border-radius: 4px; color: #fff; font-weight: bold; cursor: pointer;">Simpan</button>
        </form>
    </div>
@endsection
