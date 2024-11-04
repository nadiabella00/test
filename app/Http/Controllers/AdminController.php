<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function paket()
    {
        $pakets = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    public function pemesanan()
    {
        $pemesanan = Booking::all();
        return view('admin.bookings.index', compact('booking'));
    }
}