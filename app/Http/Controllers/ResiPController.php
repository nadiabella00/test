<?php
namespace App\Http\Controllers;

use App\Models\Resi;
use Illuminate\Http\Request;

class ResiPController extends Controller
{
    public function index()
    {
        $resis = Resi::where('user_id', auth()->id())->get();
        return view('booking.resi', compact('resis'));
    }
}