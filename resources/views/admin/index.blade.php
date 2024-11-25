<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Ticket KAI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .slide-in {
            animation: slideIn 0.5s ease-out forwards;
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        html, body {
            height: 100%;
            margin: 0;
        }

        .flex-container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 240px;
            height: 100%;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex-container">
        <!-- Sidebar -->
        <div class="sidebar bg-gray-800 text-white p-6 slide-in">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-semibold">Admin Dashboard</h2>
            </div>
            <ul class="space-y-4">
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.packages.index') }}"><i class="fas fa-box mr-2"></i> Packages</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.packages.index') }}"><i class="fas fa-box mr-2"></i> Data Penumpang</a></li>
                
                
            </ul>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="mt-8">
                @csrf
                <button type="submit" class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </button>
            </form>
        </div>

        <!-- Main Content -->
        <div class="main-content fade-in">
            <h1 class="text-4xl font-bold mb-8">Dashboard</h1>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold">Total Packages</h2>
                    <p class="text-3xl font-bold">{{ $packageCount }}</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
