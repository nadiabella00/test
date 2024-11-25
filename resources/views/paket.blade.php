@extends('layouts.app')

@section('content')

<div class="navbar">
    <h1><a href="/">BOOK TRAINS</a></h1>
    <ul>
        <li><a href="/paket">SCHEDULE</a></li>
        <li><a href="/riwayatbooking">RIWAYAT BOOKING</a></li>
        
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto"> <!-- Add ms-auto here -->
                @if(Auth::check())
                    <!-- Logout Button with Icon -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i> <!-- Logout Icon -->
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <!-- Login and Register Icons -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right"></i> <!-- Login Icon -->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="bi bi-person-plus"></i> <!-- Register Icon -->
                        </a>
                    </li>
                @endif
            </ul>   <!-- Logout Button -->
    </ul>
</div>

<style>
    .navbar {
        background-color: #0056b3;
        padding: 10px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .navbar h1 {
        margin: 0;
        font-size: 24px;
    }
    .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 20px;
    }
    .navbar ul li {
        display: inline;
    }
    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }
    .navbar ul li a:hover {
        text-decoration: underline;
    }

    /* Card Styling */
    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 100%;
        max-width: 300px;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        margin: 0 auto;
    }

    .card h2 {
        font-size: 18px;
        color: #333;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 14px;
        color: #555;
        margin: 5px 0;
    }

    .button {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        margin-top: 10px;
    }

    .button:hover {
        background-color: #0056b3;
    }
</style>

<!-- Hero Section -->
<div class="header py-5 text-center" style="background-image: url('img/tiket.jpg'); background-size: cover; background-position: center; height: 484px; display: flex; justify-content: center; align-items: center; color: #ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
    <h1>Train Schedule</h1>
</div>

<!-- Features Section -->
<section class="py-5 border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            @foreach($packages as $package)
            <div class="col-lg-4 mb-5">
                <div class="card">
                    <h2>{{ $package->route }}</h2>
                    <p><strong>Keberangkatan:</strong> {{ $package->departure_time }}</p>
                    <p><strong>Kedatangan:</strong> {{ $package->arrival_time }}</p>
                    <p><strong>Kelas:</strong> {{ $package->class }}</p>
                    <p><strong>Tanggal:</strong> {{ $package->date }}</p>
                    <p><strong>Status:</strong> {{ $package->status }}</p>
                    <p><strong>Harga:</strong> Rp. {{ number_format($package->price, 0, ',', '.') }}</p>
                    <!-- Update this link to include the package_id -->
                    <a href="{{ route('booking.form', $package->id) }}" class="button">Pesan Sekarang</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
