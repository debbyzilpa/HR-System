@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <link rel="stylesheet" href="{{ asset('css/karyawan.css') }}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Karyawan yang Diarsipkan</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-container">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>NIK Karyawan</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>Tanggal Kontrak</th>
                                    <th>Tanggal Kerja</th>
                                    <th>Status</th>
                                    <th>Jabatan</th>
                                    <th>NUPTK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Agama</th>
                                    <th>Email</th>
                                    <th>Hobi</th>
                                    <th>Status Pernikahan</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Nomor Handphone</th>
                                    <th>Alamat Darurat</th>
                                    <th>Nomor Handphone Darurat</th>
                                    <th>Golongan Darah</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Lembaga</th>
                                    <th>Tahun Lulus</th>
                                    <th>Tempat Pelatihan Kompetensi</th>
                                    <th>Pengalaman Organisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $item)
                                    <tr>
                                        <td>{{ $item->id_number }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->nickname }}</td>
                                        <td>{{ $item->contract_date }}</td>
                                        <td>{{ $item->work_date }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->position }}</td>
                                        <td>{{ $item->nuptk }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->place_birth }}</td>
                                        <td>{{ $item->birth_date }}</td>
                                        <td>{{ $item->religion }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->hobby }}</td>
                                        <td>{{ $item->marital_status }}</td>
                                        <td>{{ $item->residence_address }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address_emergency }}</td>
                                        <td>{{ $item->phone_emergency }}</td>
                                        <td>{{ $item->blood_type }}</td>
                                        <td>{{ $item->last_education }}</td>
                                        <td>{{ $item->agency }}</td>
                                        <td>{{ $item->graduation_year }}</td>
                                        <td>{{ $item->competency_training_place }}</td>
                                        <td>{{ $item->organizational_experience }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
