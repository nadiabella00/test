<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;


class BookingsController extends Controller
{
    public function showPersonalDataForm()
    {
        return view('booking.form');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'number_of_passengers' => 'required|string',
            'booking_date' => 'required|date',
            'booking_time' => 'required|date_format:H:i',
            'choose_bench' => 'required|string|max:255',
        ]);

        // Generate unique resi code
        $resiCode = 'RESI-' . strtoupper(uniqid());

        // Simpan data ke database
        $booking = Booking::create([
            'resi_code' => $resiCode,
            'customer_name' => $validatedData['customer_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'number_of_passengers' => $validatedData['number_of_passengers'],
            'booking_date' => $validatedData['booking_date'],
            'booking_time' => $validatedData['booking_time'],
            'choose_bench' => $validatedData['choose_bench'],
        ]);

        // Redirect ke halaman resi dengan data booking
        return redirect()->route('booking.resi', ['id' => $booking->id]);
    }
    public function show($id)
{
    // Ambil data booking berdasarkan kode resi
    // $booking = Booking::where('resi_code', $resi_code)->first();
    $booking = Booking::findOrFail($id);
    // Jika booking tidak ditemukan, bisa ditangani dengan error atau redirect
    if (!$booking) {                            
        return redirect()->route('booking.form')->withErrors('Booking tidak ditemukan.');
    }

    // Tampilkan halaman resi dengan data booking
    return view('booking.resi', compact('booking'));
}


    public function showResi($id)
    {
        // Ambil data booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Return halaman resi dengan data booking
        return view(' booking.resi', ['booking' => $booking]);
    }

 // Tampilkan halaman resi booking
 public function resi()
{
    // Ambil semua data booking (atau sesuaikan sesuai kebutuhan)
    $booking = Booking::latest()->first(); // Ambil booking terakhir (atau lainnya sesuai kebutuhan)

    // Jika booking tidak ditemukan, bisa ditangani dengan error atau redirect
    if (!$booking) {
        return redirect()->route('booking.form')->withErrors('Booking tidak ditemukan.');
    }

    // Tampilkan halaman resi dengan data booking
    return view('booking.resi', compact('booking'));
}

 public function history()
 {
     // Ambil data histori booking pengguna
     $history = auth()->user()->bookings; // Asumsi relasi user-bookings telah diatur

     return view('booking.history', compact('history'));
 }

}