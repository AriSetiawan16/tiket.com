<!-- resources/views/event/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Daftar Event</h1>

    @if($events->isEmpty())
        <p class="text-center">Belum ada event yang tersedia.</p>
    @else
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($event->image_url)
                            <img src="{{ asset('storage/' . $event->image_url) }}" class="card-img-top" alt="Event Image">
                        @else
                            <img src="{{ asset('images/default-event.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $Event->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($Event->description, 100) }}</p>
                            <p class="card-text"><strong>Lokasi:</strong> {{ $Event->location }}</p>
                            <p class="card-text"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($Event->date)->format('d M Y') }}</p>
                            <p class="card-text"><strong>Harga Mulai:</strong> Rp {{ number_format($Event->price, 0, ',', '.') }}</p>
                            <a href="{{ route('event.show', $Event->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
