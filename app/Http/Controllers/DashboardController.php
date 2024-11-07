<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Logika atau data untuk halaman dashboard
        return view('dashboard'); // Pastikan ada file dashboard.blade.php di resources/views
    }
}
