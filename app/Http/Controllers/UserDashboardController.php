<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\TravelPackage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    // Dashboard to view user's bookings and payments
    public function index(Request $request)
    {
        $id = Auth::user()->user_id; // Get current authenticated user's ID
        $avatar = Auth::user()->avatar; // Get current user's avatar

        // Fetch bookings related to the authenticated user
        $bookings = Booking::with(['travelPackage', 'payment'])
                           ->where('user_id', $id) // Fetch only the bookings for the logged-in user
                           ->get();

        // Get additional user details (e.g., name, email, etc.)
        $details = User::where('user_id', $id)->first();

        // Return the dashboard view with the necessary data
        return view('pages.dashboard', [
            'bookings' => $bookings,
            'id' => $id,
            'avatars' => $avatar,
            'details' => $details,
        ]);
    }

    // View a specific payment or booking detail
    public function show($id)
    {
        $payment = Payment::with(['booking', 'booking.travelPackage'])
                          ->findOrFail($id); // Retrieve the payment details along with related booking and travel package

        // Return the order detail view
        return view('pages.detailorder', [
            'payment' => $payment
        ]);
    }
}
