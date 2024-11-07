@extends('layouts.app')

@section('content')
    <!-- Bagian Carousel -->
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-slide">
                <img src="{{ asset('images/joong.jpg') }}" alt="Event 1" class="carousel-image">
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('images/open_house.png') }}" alt="Event 2" class="carousel-image">
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('images/go_ahead_musik.png') }}" alt="Event 3" class="carousel-image">
            </div>
        </div>
        <button class="carousel-nav prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-nav next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <!-- Bagian Rekomendasi Terbaik -->
    <h2>Rekomendasi Terbaik</h2>
    <div class="event-section">
        <div class="event-cards">
            <div class="event-card">
                <img src="{{ asset('images/estungkara.png') }}" alt="Estungkara 2024">
                <h3>Estungkara 2024</h3>
                <p>Jakarta Barat | 09 Nov 24</p>
                <p class="price">Rp. 50.000</p>
            </div>
            <div class="event-card">
                <img src="{{ asset('images/closman.png') }}" alt="CLOSMAN">
                <h3>CLOSMAN</h3>
                <p>Jakarta Selatan | 11 Nov 24</p>
                <p class="price">Rp. 175.000</p>
            </div>
            <div class="event-card">
                <img src="{{ asset('images/jakarta_christmas.jpeg') }}" alt="The Jakarta Christmas Concert">
                <h3>The Jakarta Christmas Concert</h3>
                <p>Jakarta Selatan | 15 Des 24</p>
                <p class="price">Rp. 250.000</p>
            </div>
            <div class="event-card">
                <img src="{{ asset('images/joong_meeting_in_jakarta.jpeg') }}" alt="Joong Your Smile Solo Fan Meeting">
                <h3>Joong Your Smile Solo Fan Meeting in Jakarta</h3>
                <p>Jakarta Pusat | 09 Nov 24</p>
                <p class="price">Rp. 977.500</p>
            </div>
        </div>
        <a href="#" class="view-more">Lihat semua</a>
    </div>

    <!-- Bagian Event Terbaru -->
    <h2>Event Terbaru</h2>
    <div class="event-section">
        <div class="event-cards">
            <div class="event-card">
                <img src="{{ asset('images/big_force.jpeg') }}" alt="New Year's Eve Wave Of Glamour with Anggun">
                <h3>New Year's Eve Wave Of Glamour with Anggun</h3>
                <p>Bali | 31 Des 24</p>
                <p class="price">Rp. 4.500.000</p>
            </div>
            <div class="event-card">
                <img src="{{ asset('images/batu_trail_run.jpeg') }}" alt="BIG FORCE! Festival 2024">
                <h3>BIG FORCE! Festival 2024</h3>
                <p>Bandung | 07 Des 24</p>
                <p class="price">Rp. 45.000</p>
            </div>
            <div class="event-card">
                <img src="{{ asset('images/building_strategic.jpeg') }}" alt="Batu Trail Run">
                <h3>Batu Trail Run</h3>
                <p>Malang | 24 Des 24</p>
                <p class="price">Rp. 300.000</p>
            </div>
            <div class="event-card">
                <img src="{{ asset('images/swara_mas.png') }}" alt="Building Strategic CSR">
                <h3>Building Strategic CSR, Measuring Impact with...</h3>
                <p>Surabaya | 24 Nov 24</p>
                <p class="price">Rp. 200.000</p>
            </div>
        </div>
        <a href="#" class="view-more">Lihat semua</a>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
@endsection
