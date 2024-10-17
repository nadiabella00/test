<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VANA Carwash') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Responsive navbar-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Navbar brand and toggler -->
        <a class="navbar-brand" href="/home"><strong>VANA</strong> Carwash</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <!-- Centered navigation links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/histori">Histori</a></li>
                <li class="nav-item"><a class="nav-link" href="/paket">Paket</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Petugas</a></li>
            </ul>

            <!-- Right-aligned Contact Us link -->
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item"><a class="nav-link" href="https://wa.me/your-phone-number" target="_blank"><i class="bi-whatsapp"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>



    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer-->
    <footer class="footer mt-auto py-3" style="background-color: lightblue;">
        <div class="container text-center">
            <p class="text">Copyright 2024 Malang, Jawa Timur,Indonesia.</p></div>
    </footer>
</body>
</html>