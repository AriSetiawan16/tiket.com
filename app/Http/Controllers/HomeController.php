<?php

// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 4 event rekomendasi
        $recommendedEvents = Event::take(4)->get();

        // Mengambil 4 event terbaru berdasarkan tanggal terbaru
        $newEvents = Event::orderBy('date', 'desc')->take(4)->get();

        // Mengirim data event ke tampilan home
        return view('home', compact('recommendedEvents', 'newEvents'));
    }
}

