@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <link rel="stylesheet" href="{{ asset('css/karyawan.css') }}">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-flex justify-content-between align-items-center">
                            Data Karyawan
                            <a href="{{ url('employee/create') }}" class="btn btn-primary">Tambah Karyawan</a>
                        </h4>
                    </div>
                    <div class="card-body">
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
                                        <th>Aksi</th>
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
                                            <td>
                                                <a href="{{ url('employee/' . $item->id_number . '/edit') }}"
                                                    class="btn btn-success btn-sm">Edit</a>
                                                    <form action="{{ route('employee.archived', ['id_number' => $item->id_number]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin mengarsipkan karyawan ini?');">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-danger btn-sm">Arsipkan</button>
                                                    </form>
                                                </td>
                                        </tr>
                                        @if ($item->familyData)
                                            <tr>
                                                <td colspan="26">
                                                    <h5>Data Keluarga Karyawan</h5>
                                                    <table class="table table-bordered table-striped table-family">
                                                        <thead>
                                                            <tr>
                                                                <th>Nama Pasangan</th>
                                                                <th>Nama Anak</th>
                                                                <th>Tanggal Menikah</th>
                                                                <th>Nomor Sertifikat Pernikahan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $item->familyData->mate_name ?? 'Tidak ada' }}</td>
                                                                <td>{{ $item->familyData->child_name ?? 'Tidak ada' }}</td>
                                                                <td>{{ $item->familyData->wedding_date ?? 'Tidak ada' }}
                                                                </td>
                                                                <td>{{ $item->familyData->wedding_certificate_number ?? 'Tidak ada' }}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        @endif
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
