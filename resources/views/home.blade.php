@extends('layout')

@section('header')
    <div class="header">
        <img src="{{ asset('images/logoku.png') }}" alt="Logo">
        <div>
            <button class="btn">Profile</button>
            <button class="btn">Settings</button>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <h3>Selamat datang di Home</h3>
        <p>Ini adalah halaman utama.</p>
    </div>
@endsection
