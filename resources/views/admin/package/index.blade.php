<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Manage Packages</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }

        .btn-hover:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease-in-out;
        }

        table tbody tr:hover {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen shadow-md">
            <div class="p-6 text-center">
                <h2 class="text-2xl font-bold">Admin Dashboard</h2>
            </div>
            <ul class="mt-6">
                <li class="px-4 py-2 hover:bg-gray-700 rounded">
                    <a href="{{ route('admin.index') }}">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded">
                    <a href="{{ route('admin.packages.index') }}">
                        <i class="fas fa-box mr-2"></i> Packages
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded">
                    <a href="{{ route('resi.show') }}">
                        <i class="fas fa-users mr-2"></i> Data Penumpang
                    </a>
                </li>
            </ul>
            <form method="POST" action="{{ route('logout') }}" class="mt-8">
                @csrf
                <button type="submit"
                    class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </button>
            </form>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Manage Packages</h1>

            <!-- Add New Package Button -->
            <div class="mb-4">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 btn-hover"
                    onclick="openAddModal()">Add New Package</button>
            </div>

            <!-- Package Table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 border-b text-left">Route</th>
                            <th class="py-2 px-4 border-b text-left">Departure Time</th>
                            <th class="py-2 px-4 border-b text-left">Arrival Time</th>
                            <th class="py-2 px-4 border-b text-left">Price</th>
                            <th class="py-2 px-4 border-b text-left">Date</th>
                            <th class="py-2 px-4 border-b text-left">Status</th>
                            <th class="py-2 px-4 border-b text-left">Class</th>
                            <th class="py-2 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $package->route }}</td>
                                <td class="py-2 px-4 border-b">{{ $package->departure_time }}</td>
                                <td class="py-2 px-4 border-b">{{ $package->arrival_time }}</td>
                                <td class="py-2 px-4 border-b">Rp {{ number_format($package->price, 0, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b">{{ $package->date }}</td>
                                <td class="py-2 px-4 border-b">{{ $package->status }}</td>
                                <td class="py-2 px-4 border-b">{{ $package->class }}</td>
                                <td class="py-2 px-4 border-b space-x-2">
                                    <button
                                        class="bg-yellow-500 text-white px-4 py-2 rounded shadow-md hover:bg-yellow-600 transition"
                                        onclick="openEditModal({{ json_encode($package) }})">Edit</button>
                                    <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-4 py-2 rounded shadow-md hover:bg-red-600 transition">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div id="add-modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden fade-in">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/3">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Add New Package</h2>
            <form action="{{ route('admin.packages.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">Route</label>
                    <input type="text" name="route" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Departure Time</label>
                    <input type="time" name="departure_time" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Arrival Time</label>
                    <input type="time" name="arrival_time" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Price</label>
                    <input type="number" name="price" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Date</label>
                    <input type="date" name="date" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Status</label>
                    <input type="text" name="status" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Class</label>
                    <input type="text" name="class" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg"
                        onclick="closeAddModal()">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function openAddModal() {
            document.getElementById('add-modal').classList.remove('hidden');
        }

        function closeAddModal() {
            document.getElementById('add-modal').classList.add('hidden');
        }
    </script>
</body>

</html>
