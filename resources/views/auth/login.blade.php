@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-family: 'Nunito', sans-serif;
            color: #343a40;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            color: #495057;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            width: 100%;
            color: white;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .mt-3 {
            margin-top: 15px;
            text-align: center;
        }

        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>

    <h2>Masuk</h2>

    <!-- Menampilkan pesan sukses atau error -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Masuk</button>

        <div class="mt-3">
            Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
        </div>
    </form>
</div>
@endsection
