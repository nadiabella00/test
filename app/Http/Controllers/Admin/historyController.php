<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

$dataBooking = Booking::all();
return view('riwayat-booking', compact('dataBooking'));

class BookingController extends Controller
{
    public function riwayatBooking()
    {
        // Dummy data (gunakan model jika menggunakan database)
        $dataBooking = [
            (object) ['tanggal' => '2023-10-01', 'kereta' => 'Argo Bromo Anggrek', 'asal' => 'Jakarta', 'tujuan' => 'Surabaya', 'status' => 'Selesai'],
            (object) ['tanggal' => '2023-09-15', 'kereta' => 'Taksaka', 'asal' => 'Yogyakarta', 'tujuan' => 'Jakarta', 'status' => 'Dibatalkan'],
            (object) ['tanggal' => '2023-08-20', 'kereta' => 'Gajayana', 'asal' => 'Malang', 'tujuan' => 'Jakarta', 'status' => 'Selesai'],
            (object) ['tanggal' => '2023-07-10', 'kereta' => 'Argo Wilis', 'asal' => 'Bandung', 'tujuan' => 'Surabaya', 'status' => 'Selesai'],
            (object) ['tanggal' => '2023-06-05', 'kereta' => 'Argo Parahyangan', 'asal' => 'Jakarta', 'tujuan' => 'Bandung', 'status' => 'Selesai'],
        ];

        return view('riwayat-booking', compact('dataBooking'));
    }
}
