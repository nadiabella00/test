<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function adminDashboard()
    {
        // Fetch all reviews from the database
        $reviews = Review::all();

        // Pass the reviews data to the admin dashboard view
        return view('admin.index');
    }

    public function storeReview(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'comment' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('review', 'public');
        }

        Review::create([
            'customer_name' => $request->customer_name,
            'comment' => $request->comment,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Review uploaded successfully!');
    }
}
