<?php

// app/Http/Controllers/EventController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Mengambil semua event dari database
        $events = Event::orderBy('date', 'asc')->get();

        // Mengirim data event ke tampilan event
        return view('event', compact('events'));
    }

    public function show($id)
    {
        // Mengambil data event berdasarkan ID
        $event = Event::findOrFail($id);

        // Mengirim data event ke tampilan detail event
        return view('event.show', compact('event'));
    }
}

