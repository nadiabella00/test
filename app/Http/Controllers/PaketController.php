<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('paket', compact('packages'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Route' => 'required|string|max:',
            'Departure_Time' => 'required|numeric',
            'Arrival_Time' => 'required|numeric',
            'Price' => 'required|numeric',
            'Date' => 'required|date',
            'Status' => 'required|string|max:1000',
            'Class' => 'required|string|max:1000',
        ]);
    
        Package::create($validated);
        return redirect()->route('admin.packages.index')->with('success', 'Package created successfully');
    }
    
}