<html>
<head>
    <title>Train Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
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
        .content {
            text-align: center;
            padding: 50px 0;
        }
        .content h1 {
            font-size: 72px;
            margin: 0;
        }
        .content p {
            font-size: 24px;
            margin: 20px 0;
        }
        .content a {
            display: inline-block;
            padding: 10px 20px;
            background-color: yellow;
            color: black;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
        }
        .content a:hover {
            background-color: #ffcc00;
        }
        .background-image {
            background-image: url('/img/stasiun.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            position: relative;
        }
        .background-image .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .footer {
    width: 100%; /* Ensures the footer spans the full width */
    text-align: center; /* Centers the text */
    background-color: #f8f9fa; /* Optional: Adjust footer background color */
}
    </style>
</head>
<body>
    <div class="navbar">
        <h1>BOOK TRAINS</h1>
        <ul>
            <li><a href="/paket">SCHEDULE</a></li>
            <li><a href="/riwayatbooking">RIWAYAT BOOKING</a></li>
            <!-- Logout Button -->
            <li>
                <a  href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- The background image -->
    <div class="background-image">
        <div class="overlay"></div>
    </div>

    <!-- Main content -->
    <div class="content">
    <h1>SELAMAT DATANG</h1>
    <p>Kamu Mau Kemana?</p>
    <a href="{{ route('paket') }}" class="button">Pesan Tiket</a>
</div>


    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <!-- Footer -->
<footer class="footer mt-auto py-3 bg-lightblue">
    <div class="container text-center">
        <p class="text-muted mb-0">Copyright 2024 Malang, Jawa Timur, Indonesia</p>
    </div>
</footer>
</body>
</html>