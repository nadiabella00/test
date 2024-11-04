<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Package;

class BookingController extends Controller
{
    public function create(Package $package)
    {
        return view('bookings.create', compact('package'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'email' => 'required|email',
            'resi' => 'required|unique:pemesanan',
        ]);

       Booking::create($request->all());

        return redirect()->route('bookings.history');
    }

    public function history()
    {
        $booking = Booking::all();
        return view('bookings.history', compact('booking'));
    }
}