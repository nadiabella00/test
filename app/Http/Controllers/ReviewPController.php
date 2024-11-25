<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewPController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('review', compact('reviews'));
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