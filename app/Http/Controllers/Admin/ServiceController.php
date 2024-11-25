<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
            'service_date' => 'required|date',
            'status' => 'required|in:Completed,In Progress,Pending',
        ]);

        // Create a new service entry
        Service::create([
            'customer_name' => $validated['customer_name'],
            'service_name' => $validated['service_name'], // Pastikan ini sesuai dengan input
            'service_date' => $validated['service_date'], // Pastikan ini sesuai dengan input
            'status' => 'Pending', // Status default
            'resi' => 'RESI-' . strtoupper(uniqid()), // Generate resi
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service added successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
            'service_date' => 'required|date',
            'status' => 'required|in:Completed,In Progress,Pending',
            // 'resi' => 'required|string', // Hapus jika tidak perlu diubah
        ]);

        // Update the service with validated data
        $service->update($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully');
    }

    public function cancel($id)
    {
        $service = Service::findOrFail($id); // Find the service by ID
        $service->status = 'Cancelled'; // Update the status to 'Cancelled'
        $service->save(); // Save the changes

        return redirect()->route('admin.services.index')->with('success', 'Booking cancelled successfully!');
    }
}