<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KAI') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core Theme CSS (includes Bootstrap) -->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Custom CSS for Floating Button -->
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #0056b3;
            transition: all 0.3s ease;
        }

        .navbar-light .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #f8f9fa !important;
            text-decoration: underline;
        }

        /* Navbar Brand Styling */
        .navbar-brand {
            color: white !important;
            font-size: 1.75rem;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #f8f9fa !important;
        }

        /* Navbar Collapse Styling */
        .navbar-collapse {
            justify-content: center;
        }

        .navbar-nav .nav-item {
            margin-left: 20px;
            margin-right: 20px;
        }

        .navbar-nav .nav-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Icon Styling */
        .navbar-nav .nav-link i {
            margin-right: 8px;
        }

        /* Navbar for Logged-In User */
        .navbar-nav .nav-item .nav-link {
            padding: 10px 15px;
        }

        /* Navbar on Scroll */
        .navbar.scrolled {
            background-color: #003366 !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-collapse {
                justify-content: flex-start;
            }

            .navbar-nav .nav-item {
                margin: 10px 0;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }
        }

        /* Ensure logout icon aligns at the far right */
        .navbar-nav.ml-auto {
            margin-left: auto;
        }

        .footer {
    width: 100%; /* Ensures the footer spans the full width */
    text-align: center; /* Centers the text */
    background-color: #f8f9fa; /* Optional: Adjust footer background color */
}

    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Responsive navbar -->

    <!-- Main content -->
    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    <!-- Footer -->
<footer class="footer mt-auto py-3 bg-lightblue">
    <div class="container text-center">
        <p class="text-muted mb-0">Copyright 2024 Malang, Jawa Timur, Indonesia</p>
    </div>
</footer>


    <!-- Optional: Add Bootstrap JS and dependencies for mobile responsiveness -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
