<?php

namespace App\Http\Controllers; // Ensure correct namespace

use Illuminate\Http\Request;
use App\Models\YourModel; // Replace with your actual model class
use Illuminate\Support\Facades\Storage;

class HistoriController extends Controller // Make sure to extend the base controller
{
    public function index()
    {
        // Your logic here, e.g., fetching data from the database
        return view('historiU'); // Ensure you have this view file
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_pemesanan' => 'required|string',
            'review' => 'required|string',
            'file' => 'required|image|mimes:jpg,png,jpeg|max:2048', // Max size 2MB
        ]);

        // Store the uploaded file
        $path = $request->file('file')->store('uploads', 'public');

        // Save data in the database
        Admin::create([
            'nama' => $request->nama,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'review' => $request->review,
            'file_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Upload successful!');
    }
}
