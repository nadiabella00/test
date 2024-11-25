<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class HistoriController extends Controller
{
    public function index()
    {
        // Fetch the history of bookings
        $bookings = Booking::all(); // Adjust this to your actual query
    
        return view('history', compact('bookings'));
    }
    
}


