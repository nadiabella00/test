<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('admin.review.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('reviews', 'public');
        }

        Review::create([
            'customer_name' => $request->customer_name,
            'comment' => $request->comment,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.reviews.index')->with('success', 'Review added successfully.');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.review.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $review = Review::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($review->image) {
                Storage::disk('public')->delete($review->image);
            }
            $review->image = $request->file('image')->store('review', 'public');
        }

        $review->update([
            'customer_name' => $request->customer_name,
            'comment' => $request->comment,
        ]);

        return redirect()->route('admin.reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        if ($review->image) {
            Storage::disk('public')->delete($review->image);
        }
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully.');
    }
}