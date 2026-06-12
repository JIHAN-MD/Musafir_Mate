<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Destination;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    // Show available flights for a destination
    public function index(Request $request)
    {
        $destinationId = $request->input('destination');
        $destinations = Destination::all();
        $flights = Flight::where('destination_id', $destinationId)->get(); // Make sure this query returns multiple flights

        return view('pages.destinations.index', compact('destinations', 'flights'));
    }

    // Search for flights based on user input
    public function search(Request $request)
    {
        // Validate the request (just destination in this case)
        $request->validate([
            'destination' => 'required',
        ]);

        $destinationId = $request->input('destination');
        $destination = Destination::find($destinationId);  // Retrieve the destination

        // Fetch flights and sort by price (ascending)
        $flights = Flight::where('destination_id', $destinationId)
                         ->orderBy('price', 'asc') // Sort by price
                         ->get();

        return view('pages.flights.results', compact('flights', 'destination'));  // Pass flights and destination to the view
    }

    // Handle booking form display and submission
    public function book(Request $request, $flight_id)
    {
        // Fetch the flight with its destination relationship
        $flight = Flight::with('destination')->where('flight_id', $flight_id)->firstOrFail();

        if ($request->isMethod('post')) {
            // Handle form submission and booking

            // Validate form inputs
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string|max:15',
                'payment' => 'required|string|max:255',
            ]);

            // You can also create a Booking model here (you may need to create a Booking model and migration)
            // Example:
            // Booking::create([
            //     'flight_id' => $flight->flight_id,
            //     'name' => $validated['name'],
            //     'email' => $validated['email'],
            //     'phone' => $validated['phone'],
            //     'payment' => $validated['payment'],
            // ]);

            // Process payment (if needed) or any other final steps

            // Redirect to a confirmation page with a success message
            return redirect()->route('flights.confirmation')->with('success', 'Booking confirmed! We will contact you shortly.');
        }

        // Display the booking form (GET request)
        return view('pages.flights.book', compact('flight'));
    }
}
