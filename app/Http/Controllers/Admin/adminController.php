<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Http\Controllers\Controller;

class adminController extends Controller
{ 

    public function index()
    {
        // Mengambil semua data booking
        $bookings = Booking::all();
        
        // Mengembalikan tampilan admin dengan data penumpang
        return view('admin.package.index', compact('bookings'));
    }
    
    public function adminIndex()
{
    // Count the data from the database
    $packageCount = Package::count();

    // Pass the data to the view
    return view('admin.index', compact('packageCount',));
}
} 