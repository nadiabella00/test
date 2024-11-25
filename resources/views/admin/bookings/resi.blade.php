<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen shadow-md">
            <div class="p-6 text-center">
                <h2 class="text-2xl font-bold">Resi Service</h2>
            </div>
            <ul class="mt-6">
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.services.index') }}"><i class="fas fa-car mr-2"></i> Completed Services</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.packages.index') }}"><i class="fas fa-box mr-2"></i> Packages</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.reviews.index') }}"><i class="fas fa-star mr-2"></i> Reviews</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.bookings.index') }}"><i class="fas fa-calendar-alt mr-2"></i> Booking</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.resis.index') }}"><i class="fas fa-file-alt mr-2"></i> Manage Resi</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-6">Manage Resi</h1>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <form action="{{ route('admin.resis.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="customerName" class="block text-gray-700 font-bold mb-2">Customer Name</label>
                        <input type="text" name="customer_name" id="customerName" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter Customer Name" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                        <input type="text" name="phone" id="phone" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                        <input type="text" name="address" id="address" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter Address" required>
                    </div>
                    <div class="mb-4">
                        <label for="postalCode" class="block text-gray-700 font-bold mb-2">Postal Code</label>
                        <input type="text" name="postal_code" id="postalCode" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter Postal Code" required>
                    </div>
                    <div class="mb-4">
                        <label for="carType" class="block text-gray-700 font-bold mb-2">Car Type</label>
                        <input type="text" name="car_type" id="carType" class=" w-full p-2 border border-gray-300 rounded" placeholder="Enter Car Type" required>
                    </div>
                    <div class="mb-4">
                        <label for="bookingDate" class="block text-gray-700 font-bold mb-2">Booking Date</label>
                        <input type="date" name="booking_date" id="bookingDate" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="bookingTime" class="block text-gray-700 font-bold mb-2">Booking Time</label>
                        <input type="time" name="booking_time" id="bookingTime" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="servicePackage" class="block text-gray-700 font-bold mb-2">Service Package</label>
                        <select name="service_package" id="servicePackage" class="w-full p-2 border border-gray-300 rounded" required>
                            <option value="basic">Basic</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800">Save</button>
                    </div>
                </form>
            </div>

            <!-- Table -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Booking List</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200">Customer Name</th>
                            <th class="py-2 px-4 border-b border-gray-200">Phone</th>
                            <th class="py-2 px-4 border-b border-gray-200">Address</th>
                            <th class="py-2 px-4 border-b border-gray-200">Postal Code</th>
                            <th class="py-2 px-4 border-b border-gray-200">Car Type</th>
                            <th class="py-2 px-4 border-b border-gray-200">Booking Date</th>
                            <th class="py-2 px-4 border-b border-gray-200">Booking Time</th>
                            <th class="py-2 px-4 border-b border-gray-200">Service Package</th>
                            <th class="py-2 px-4 border-b border-gray-200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($resis as $resi)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->customer_name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->phone }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->address }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->postal_code }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->car_type }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->booking_date }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->booking_time }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $resi->service_package }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <a href="{{ route('admin.resis.edit', $resi) }}" class="text-yellow-600">Edit</a>
                                <form action="{{ route('admin.resis.destroy', $resi) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>