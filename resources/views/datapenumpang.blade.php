<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Resi Booking</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Set body to flex for footer positioning */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Styling for the container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Center the title */
        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
        }

        /* Center the description text */
        p {
            font-size: 1.2rem;
            color: #6c757d;
            text-align: center;
            margin-bottom: 40px;
        }

        /* Table styling */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            border-collapse: collapse;
            font-size: 1.1rem;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .table td {
            background-color: #f9f9f9;
            border: 1px solid #dee2e6;
        }

        /* Remove box shadows and borders around the table */
        .table-bordered {
            border: none;
        }

        /* Styling for footer */
        .footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            color: #6c757d;
            margin-top: auto;
        }

        /* Add some space between rows in the table */
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/paket">Schedule</a>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayatbooking">Riwayat Booking</a>
                    </li>
                    @endif
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="bi bi-person-plus"></i>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Resi Booking</h2>
        <p>Berikut adalah detail booking Anda:</p>

        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $booking->customer_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $booking->email }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ $booking->phone }}</td>
            </tr>
            <tr>
                <th>Jumlah Penumpang</th>
                <td>{{ $booking->number_of_passengers }}</td>
            </tr>
            <tr>
                <th>Tanggal Booking</th>
                <td>{{ $booking->booking_date }}</td>
            </tr>
            <tr>
                <th>Waktu Booking</th>
                <td>{{ $booking->booking_time }}</td>
            </tr>
            <tr>
                <th>Pilih Bangku</th>
                <td>{{ $booking->choose_bench }}</td>
            </tr>
        </table>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted mb-0">Copyright 2024 Malang, Jawa Timur, Indonesia</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
