<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resi;
use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index()
    {
        // Get all resi for the logged-in user
        $resis = Resi::where('user_id', auth()->id())->get(); // Ensure you have a user_id field in the resis table
    
        return view('admin.bookings.resi', compact('resis'));
    }

    public function create()
    {
        return view('admin.bookings.resi.create');
    }

    public function store(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'car_type' => 'required|string|max:50',
            'booking_date' => 'required|date',
            'booking_time' => 'required',
            'service_package' => 'required|exists:packages,id', // Validasi ID Paket
            'number_of_passengers' => 'required|integer|min:1',
        ]);
    
        // Ambil harga paket yang dipilih
        $package = Package::find($request->service_package);
        
        // Hitung harga total berdasarkan jumlah penumpang
        $total_price = $package->price * $request->number_of_passengers;
    
        // Simpan data booking ke database, termasuk total harga
        $resiData = $validated;
        $resiData['total_price'] = $total_price;
        $resiData['service_package'] = $package->Route; // atau simpan nama paket
    
        Resi::create($resiData);
    
        return redirect()->route('admin.bookings.resi')->with('success', 'Resi created successfully.');
    }
    
    public function destroy(Resi $resi)
    {
        $resi->delete();
        return redirect()->route('admin.bookings.resi')->with('success', 'Resi deleted successfully.');
    }

    


    
}