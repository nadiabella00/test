<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }

    public function store(Request $request)
{
    // Validasi input form
    $validatedData = $request->validate([
        'package_id' => 'required|exists:packages,id', // Pastikan package_id valid
        'customer_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'number_of_passengers' => 'required|integer|min:1',
        'booking_date' => 'required|date',
        'booking_time' => 'required|date_format:H:i',
        'choose_bench' => 'required|string', // Validasi untuk bangku yang dipilih
    ]);

    // Simpan data booking ke database
    $booking = new Booking();
    $booking->resi_code = 'RESI' . strtoupper(uniqid()); // Membuat kode resi unik
    $booking->package_id = $validatedData['package_id']; // Simpan ID Paket
    $booking->customer_name = $validatedData['customer_name'];
    $booking->email = $validatedData['email'];
    $booking->phone = $validatedData['phone'];
    $booking->number_of_passengers = $validatedData['number_of_passengers'];
    $booking->booking_date = $validatedData['booking_date'];
    $booking->booking_time = $validatedData['booking_time'];
    $booking->choose_bench = $validatedData['choose_bench'];
    $booking->save();

    // Redirect ke halaman resi setelah berhasil menyimpan data
    return redirect()->route('resi.show', ['id' => $booking->id]);
}


    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'route' => 'required|string|max:255',
            'departure_time' => 'required|date_format:H:i',
            'arrival_time' => 'required|date_format:H:i',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'status' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        $package->update($validated);

        return redirect()->route('admin.packages.index')->with('success', 'Package updated successfully');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('admin.packages.index')->with('success', 'Package deleted successfully');
    }

    
}
