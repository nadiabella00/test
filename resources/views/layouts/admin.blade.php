<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Vana Carwash</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/admin">Dashboard</a></li>
                <li><a href="/admin/packages">Paket Layanan</a></li>
                <li><a href="/admin/customers">Pelanggan</a></li>
                <li><a href="/admin/bookings">Pemesanan</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Vana Carwash. All rights reserved.</p>
    </footer>
</body>
</html>