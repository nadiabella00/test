<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    public function index()
    {
        // Ambil semua data bangku dari database
        $seats = Seat::all();
        return view('choose-seat', compact('seats'));
    }

    public function reserve(Request $request)
    {
        $request->validate([
            'seat_code' => 'required|exists:seats,seat_code',
        ]);

        $seat = Seat::where('seat_code', $request->input('seat_code'))->first();

        if ($seat->is_reserved) {
            return redirect()->back()->withErrors(['error' => 'Bangku sudah dipesan.']);
        }

        $seat->is_reserved = true;
        $seat->save();

        return redirect()->back()->with('success', 'Bangku berhasil dipesan.');
    }
}
