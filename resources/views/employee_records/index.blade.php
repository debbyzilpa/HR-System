@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 1000px; margin: 0 auto; padding: 20px; font-family: 'Arial', sans-serif;">
    <h1 style="text-align: center; color: #34495e; font-weight: 300; margin-bottom: 30px;">Catatan Karyawan</h1>
    <a href="{{ route('employee_records.create') }}" class="btn btn-primary" style="margin-bottom: 20px; background: linear-gradient(135deg, #3498db, #2980b9); border: none; border-radius: 10px; padding: 12px 24px; color: #fff; text-decoration: none; font-size: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background 0.3s, box-shadow 0.3s;">
        Tambah Baru
    </a>
    <div style="overflow-x: auto;">
        <table class="table" style="width: 100%; border-collapse: collapse; background-color: #009ac0; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #34495e; color: #009ac0;">
                <tr>
                    <th style="padding: 15px; text-align: left; text-transform: uppercase;">ID Number</th>
                    <th style="padding: 15px; text-align: left; text-transform: uppercase;">Jenis Pelanggaran</th>
                    <th style="padding: 15px; text-align: left; text-transform: uppercase;">Tanggal Pelanggaran</th>
                    <th style="padding: 15px; text-align: left; text-transform: uppercase;">Deskripsi</th>
                    <th style="padding: 15px; text-align: center; text-transform: uppercase;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr style="border-bottom: 1px solid #009ac0; transition: background-color 0.3s;">
                        <td style="padding: 15px; color: #2c3e50;">{{ $record->id_number }}</td>
                        <td style="padding: 15px; color: #2c3e50;">{{ $record->offense_type }}</td>
                        <td style="padding: 15px; color: #2c3e50;">{{ $record->offense_date }}</td>
                        <td style="padding: 15px; color: #2c3e50;">{{ $record->description }}</td>
                        <td style="padding: 15px; text-align: center;">
                            <a href="{{ route('employee_records.edit', $record) }}" style="background: linear-gradient(135deg, #00eeff, #00eeff); border: none; padding: 8px 16px; border-radius: 6px; text-decoration: none; color: #000000; font-weight: bold; box-shadow: 0 3px 5px rgba(0, 0, 0, 0.15); transition: background 0.3s, box-shadow 0.3s;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('employee_records.destroy', $record) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: linear-gradient(135deg, #ff0000, #ff1900); border: none; padding: 8px 16px; border-radius: 6px; color: #000000; font-weight: bold; cursor: pointer; box-shadow: 0 3px 5px rgba(0, 0, 0, 0.15); transition: background 0.3s, box-shadow 0.3s;">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Link to external CSS -->
<link rel="stylesheet" href="{{ asset('css/employee_records.css') }}">
@endsection
