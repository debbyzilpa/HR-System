<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Karyawan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        function toggleFamilyData() {
            const maritalStatus = document.querySelector('input[name="marital_status"]:checked').value;
            const familyDataSection = document.getElementById('family_data_section');
            if (maritalStatus === 'Menikah') {
                familyDataSection.style.display = 'block';
            } else {
                familyDataSection.style.display = 'none';
            }
        }

        window.onload = function () {
            toggleFamilyData(); // Ensure the correct display on page load
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h1>Form Karyawan
                            <a href="{{ url('employee') }}" class="btn btn-primary float-end">Kembali</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employee.store') }}" method="POST">
                            @csrf

                            <h1>Informasi Karyawan</h1>

                            <div class="form-group">
                                <label for="id_number">NIK Karyawan</label>
                                <input type="text" name="id_number" id="id_number" class="form-control" value="{{ old('id_number') }}">
                                @error('id_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="full_name">Nama Lengkap</label>
                                <input type="text" name="full_name" id="full_name" class="form-control" value="{{ old('full_name') }}">
                                @error('full_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="contract_date">Tanggal Kontrak</label>
                                <input type="date" name="contract_date" id="contract_date" class="form-control" value="{{ old('contract_date') }}">
                                @error('contract_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="work_date">Tanggal Masuk Kerja</label>
                                <input type="date" name="work_date" id="work_date" class="form-control" value="{{ old('work_date') }}">
                                @error('work_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Berhenti" {{ old('status') == 'Berhenti' ? 'selected' : '' }}>Berhenti</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="position">Jabatan</label>
                                <input type="text" name="position" id="position" class="form-control" value="{{ old('position') }}">
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label><br>
                                <input type="radio" name="gender" value="Pria" id="male" {{ old('gender') == 'Pria' ? 'checked' : '' }}>
                                <label for="male">Pria</label><br>
                                <input type="radio" name="gender" value="Wanita" id="female" {{ old('gender') == 'Wanita' ? 'checked' : '' }}>
                                <label for="female">Wanita</label>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="place_birth">Tempat Lahir</label>
                                <input type="text" name="place_birth" id="place_birth" class="form-control" value="{{ old('place_birth') }}">
                                @error('place_birth')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="birth_date">Tanggal Lahir</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date') }}">
                                @error('birth_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="religion">Agama</label>
                                <input type="text" name="religion" id="religion" class="form-control" value="{{ old('religion') }}">
                                @error('religion')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="residence_address">Alamat Tempat Tinggal</label>
                                <input type="text" name="residence_address" id="residence_address" class="form-control" value="{{ old('residence_address') }}">
                                @error('residence_address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address_emergency">Alamat Darurat</label>
                                <input type="text" name="address_emergency" id="address_emergency" class="form-control" value="{{ old('address_emergency') }}">
                                @error('address_emergency')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone_emergency">Nomor Telepon Darurat</label>
                                <input type="text" name="phone_emergency" id="phone_emergency" class="form-control" value="{{ old('phone_emergency') }}">
                                @error('phone_emergency')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="blood_type">Golongan Darah</label>
                                <input type="text" name="blood_type" id="blood_type" class="form-control" value="{{ old('blood_type') }}">
                                @error('blood_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="last_education">Pendidikan Terakhir</label>
                                <input type="text" name="last_education" id="last_education" class="form-control" value="{{ old('last_education') }}">
                                @error('last_education')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="agency">Instansi</label>
                                <input type="text" name="agency" id="agency" class="form-control" value="{{ old('agency') }}">
                                @error('agency')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="graduation_year">Tahun Lulus</label>
                                <input type="number" name="graduation_year" id="graduation_year" class="form-control" value="{{ old('graduation_year') }}" min="1900" max="{{ date('Y') }}">
                                @error('graduation_year')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="competency_training_place">Tempat Pelatihan Kompetensi</label>
                                <input type="text" name="competency_training_place" id="competency_training_place" class="form-control" value="{{ old('competency_training_place') }}">
                                @error('competency_training_place')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="organizational_experience">Pengalaman Organisasi</label>
                                <textarea name="organizational_experience" id="organizational_experience" class="form-control">{{ old('organizational_experience') }}</textarea>
                                @error('organizational_experience')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <h1>Informasi Keluarga</h1>

                            <div class="form-group">
                                <label for="marital_status">Status Pernikahan</label><br>
                                <input type="radio" name="marital_status" value="Menikah" id="married" {{ old('marital_status') == 'Menikah' ? 'checked' : '' }} onclick="toggleFamilyData()">
                                <label for="married">Menikah</label><br>
                                <input type="radio" name="marital_status" value="Belum" id="single" {{ old('marital_status') == 'Belum' ? 'checked' : '' }} onclick="toggleFamilyData()">
                                <label for="single">Belum</label>
                                @error('marital_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div id="family_data_section" style="display: {{ old('marital_status') == 'Menikah' ? 'block' : 'none' }};">
                                <div class="form-group">
                                    <label for="mate_name">Nama Pasangan</label>
                                    <input type="text" name="mate_name" id="mate_name" class="form-control" value="{{ old('mate_name') }}">
                                    @error('mate_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="child_name">Nama Anak</label>
                                    <input type="text" name="child_name" id="child_name" class="form-control" value="{{ old('child_name') }}">
                                    @error('child_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="wedding_date">Tanggal Menikah</label>
                                    <input type="date" name="wedding_date" id="wedding_date" class="form-control" value="{{ old('wedding_date') }}">
                                    @error('wedding_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="wedding_certificate_number">Nomor Sertifikat Nikah</label>
                                    <input type="text" name="wedding_certificate_number" id="wedding_certificate_number" class="form-control" value="{{ old('wedding_certificate_number') }}">
                                    @error('wedding_certificate_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
