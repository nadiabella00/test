<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Car Wash Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; }
        .fade-in { animation: fadeIn 0.3s ease-out; }
        .btn-hover:hover { transform: scale(1.05); transition: transform 0.2s ease-in-out; }
        .sidebar { animation: slideIn 0.5s ease-out; }
        table tbody tr:hover { background-color: #f3f4f6; }
        @keyframes fadeIn { 0% { opacity: 0; transform: scale(0.9); } 100% { opacity: 1; transform: scale(1); } }
        @keyframes slideIn { 0% { transform: translateX(-100%); } 100% { transform: translateX(0); } }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen sidebar">
            <div class="p-4 text-center"><h2 class="text-2xl font-bold">Admin</h2></div>
            <ul class="mt-6 space-y-2">
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.services.index') }}"><i class="fas fa-car mr-2"></i> Completed Services</a></li>
                <li class="px-4 py-2 hover:bg-gray-700 rounded"><a href="{{ route('admin.packages.index') }}"><i class="fas fa-box mr-2"></i> Packages</a></li>
        
            </ul>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Manage Completed Services</h1>
            <div class="mb-4">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 btn-hover transition" onclick="openModal()">Add New Service</button>
            </div>
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-left">Service ID</th>
                            <th class="py-2 px-4 border-b text-left">Customer Name</th>
                            <th class="py-2 px-4 border-b text-left">Service Name</th>
                            <th class="py-2 px-4 border-b text-left">Date</th>
                            <th class="py-2 px-4 border-b text-left">Status</th>
                            <th class="py-2 px-4 border-b text-left">Resi</th>
                            <th class="py-2 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $service->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $service->customer_name }}</td>
                            <td class="py-2 px-4 border-b">{{ $service->service_name }}</td>
                            <td class="py-2 px-4 border-b">{{ $service->service_date }}</td>
                            <td class="py-2 px-4 border-b">{{ $service->status }}</td>
                            <td class="py-2 px-4 border-b">{{ $service->resi }}</td>
                            <td class="py-2 px-4 border-b space-x-2">
                                <button class="bg-yellow-500 text-white px-4 py-2 rounded shadow-md hover:bg-yellow-600 btn-hover transition" onclick="openModal({{ json_encode($service) }})">Edit</button>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow-md hover:bg-red-600 btn-hover transition">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden fade-in">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/3">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Add Service</h2>
            <form id="modalForm" action="" method="POST">
                @csrf
                <input type="hidden" name="_method" id="method">
                <div class="mb-4"><label class="block text-gray-700">Customer Name</label><input type="text" id="customerName" name="customer_name" class="w-full px-4 py-2 border rounded-lg" placeholder="Enter customer name" required></div>
                <div class="mb-4"><label class="block text-gray-700">Service Name</label><input type="text" id="serviceName" name="service_name" class="w-full px-4 py-2 border rounded-lg" placeholder="Enter service name" required></div>
                <div class="mb-4"><label class="block text-gray-700">Service Date</label><input type="date" id="serviceDate" name="service_date" class="w-full px-4 py-2 border rounded-lg" required></div>
                <div class="mb-4"><label class="block text-gray-700">Status</label><select id="status" name="status" class="w-full px-4 py-2 border rounded-lg" required><option value="Completed">Completed</option><option value="In Progress">In Progress</option><option value="Pending">Pending</option></select></div>
                <div class="mb-4"><label class="block text-gray-700">Resi</label><input type="text" id="resi" name="resi" class="w-full px-4 py-2 border rounded-lg" placeholder="Enter resi" required></div>
                <div class="flex justify-end space-x-4"><button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-600 btn-hover transition" onclick="closeModal()">Cancel</button><button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 btn-hover transition">Save</button></div>
            </form>
        </div>
    </div>

    <script>
        function openModal(service = null) {
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');

            if (service) {
                document.getElementById('modalForm').action = `/admin/services/${service.id}`;
                document.getElementById('method').value = 'PUT';
                document.getElementById('customerName').value = service.customer_name;
                document.getElementById('serviceName').value = service.service_name;
                document.getElementById('serviceDate').value = service.service_date;
                document.getElementById('status').value = service.status;
                document.getElementById('resi').value = service.resi || '';
            } else {
                document.getElementById('modalForm').action = `/admin/services`;
                document.getElementById('method').value = 'POST';
                document.getElementById('customerName').value = '';
                document.getElementById('serviceName').value = '';
                document.getElementById('serviceDate').value = '';
                document.getElementById('status').value = 'Completed';
                document.getElementById('resi').value = '';
            }
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
</body>
</html>
