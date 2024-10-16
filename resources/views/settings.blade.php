@extends('layout')

@section('header')
    <div class="header">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <div>
            <button class="btn">Profile</button>
            <button class="btn">Settings</button>
            <button class="btn">Logout</button>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <h3>Pengaturan</h3>
        <p>Halaman pengaturan aplikasi.</p>
    </div>
@endsection
