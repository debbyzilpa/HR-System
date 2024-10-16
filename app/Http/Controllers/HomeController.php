<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman home
        return view('home'); // Ini mengarahkan ke 'home.blade.php'
    }

    public function settings()
    {
        // Logika untuk menampilkan halaman settings
        return view('settings'); // Ini mengarahkan ke 'settings.blade.php'
    }
}

