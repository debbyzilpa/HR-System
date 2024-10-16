<!-- resources/views/employee/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Detail Karyawan</h4>
        </div>
        <div class="card-body">
            <p><strong>ID Number:</strong> {{ $employee->id_number }}</p>
            <p><strong>Nama Lengkap:</strong> {{ $employee->full_name }}</p>
            <p><strong>Nama Panggilan:</strong> {{ $employee->nickname }}</p>
            <p><strong>Tanggal Kontrak:</strong> {{ $employee->contract_date }}</p>
            <p><strong>Tanggal Kerja:</strong> {{ $employee->work_date }}</p>
            <p><strong>Status:</strong> {{ $employee->status }}</p>
            <p><strong>Jabatan:</strong> {{ $employee->position }}</p>
            <p><strong>NUPTK:</strong> {{ $employee->nuptk }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $employee->gender }}</p>
            <p><strong>Tempat Lahir:</strong> {{ $employee->place_birth }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $employee->birth_date }}</p>
            <p><strong>Agama:</strong> {{ $employee->religion }}</p>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Hobi:</strong> {{ $employee->hobby }}</p>
            <p><strong>Status Pernikahan:</strong> {{ $employee->marital_status }}</p>
            <p><strong>Alamat Lengkap:</strong> {{ $employee->residence_address }}</p>
            <p><strong>Nomor Handphone:</strong> {{ $employee->phone }}</p>
            <p><strong>Alamat Darurat:</strong> {{ $employee->address_emergency }}</p>
            <p><strong>Nomor Handphone Darurat:</strong> {{ $employee->phone_emergency }}</p>
            <p><strong>Golongan Darah:</strong> {{ $employee->blood_type }}</p>
            <p><strong>Pendidikan Terakhir:</strong> {{ $employee->last_education }}</p>
            <p><strong>Lembaga:</strong> {{ $employee->agency }}</p>
            <p><strong>Tahun Lulus:</strong> {{ $employee->graduation_year }}</p>
            <p><strong>Tempat Pelatihan Kompetensi:</strong> {{ $employee->competency_training_place }}</p>
            <p><strong>Pengalaman Organisasi:</strong> {{ $employee->organizational_experience }}</p>
        </div>
    </div>
</div>
@endsection
