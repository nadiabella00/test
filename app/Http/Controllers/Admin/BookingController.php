<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Menampilkan data booking
    public function index()
    {
        $bookings = Booking::paginate(10);
        return view('paket', compact('bookings'));
    }

    // Menyimpan data booking
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'number_of_passengers' => 'required|integer|min:1',
            'booking_date' => 'required|date',
            'booking_time' => 'required|date_format:H:i',
            'choose_bench' => 'required|string',
        ]);

        $booking = new Booking();
        $booking->package_id = $request->package_id;
        $booking->resi_code = 'RESI' . strtoupper(uniqid());
        $booking->customer_name = $validatedData['customer_name'];
        $booking->email = $validatedData['email'];
        $booking->phone = $validatedData['phone'];
        $booking->number_of_passengers = $validatedData['number_of_passengers'];
        $booking->booking_date = $validatedData['booking_date'];
        $booking->booking_time = $validatedData['booking_time'];
        $booking->choose_bench = $validatedData['choose_bench'];
        $booking->save();

        return redirect()->route('resi.show', $booking->id);
    }

    // Menampilkan form edit booking
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return response()->json($booking);
    }

    // Menampilkan resi booking berdasarkan ID
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.resi', compact('booking'));
    }

    public function showForm($package_id = null)
    {
        $package = Package::where('id', $package_id)->first();

        return view('booking.form', compact('package'));
    }

    // Menghapus booking
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully');
    }

    // Menampilkan histori riwayat layanan
    public function history()
    {
        $history = auth()->user()->bookings; // Asumsi relasi user-bookings telah diatur
        return view('booking.history', compact('history'));

    }

    public function resi(Booking $booking)
    {
        return view('booking.resi', compact('booking'));
    }
}
