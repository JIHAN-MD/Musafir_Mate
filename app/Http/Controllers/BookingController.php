<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect()->route('bookings.index');
    }

    public function show($id)
    {
        $bookings = Booking::findOrFail($id);
        return view('bookings.show', compact('bookings'));
    }
}
