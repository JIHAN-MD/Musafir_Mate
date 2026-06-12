<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Restaurant;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $suggestedDestinations = Destination::inRandomOrder()->limit(4)->get();

        return view('pages.destinations.index', compact('destinations', 'suggestedDestinations'));
    }

    public function show($id, $withRelatedData = false)
    {
        if ($withRelatedData) {
            $destination = Destination::with(['hotels', 'restaurants', 'travelPackages', 'images'])->findOrFail($id);
        } else {
            $destination = Destination::with('images')->findOrFail($id);
        }

        return view('pages.destinations.show', compact('destination'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'country' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $destination = new Destination();
        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->country = $request->country;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('frontend/images'), $imageName);
            $destination->image = $imageName;
        }

        $destination->save();

        return redirect()->route('destinations.index')->with('success', 'Destination created successfully!');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'destination_id' => 'required|exists:destinations,destination_id',
            'depart_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:depart_date',
            'duration' => 'required|integer|min:1',
        ]);

        $destination = Destination::findOrFail($request->destination_id);

        $tripDetails = [
            'destination' => $destination,
            'depart_date' => $request->depart_date,
            'return_date' => $request->return_date,
            'duration' => $request->duration,
        ];

        session(['tripDetails' => $tripDetails]);

        return redirect()->route('destinations.index')->with('success', 'Trip details saved successfully!');
    }

    public function search(Request $request)
    {
        $request->validate([
            'destination' => 'required',
            'depart_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:depart_date',
            'travellers' => 'required|integer|min:1',
            'cabin_class' => 'required|string',
            'filter' => 'nullable|string|in:affordable,expensive',
        ]);

        $destinationId = $request->input('destination');
        $destination = Destination::find($destinationId);

        // Get related hotels and restaurants for the destination
        $hotels = Hotel::where('destination_id', $destinationId)->get();
        $restaurants = Restaurant::where('destination_id', $destinationId)->get();

        // Get flights related to the destination (assumed relationship with flights table)
        // $flights = Flight::where('destination_id', $destinationId)
        //                  ->whereDate('depart_date', '>=', $request->depart_date)
        //                  ->whereDate('return_date', '<=', $request->return_date)
        //                  ->get();


        // Return the search results view with destination, hotels, restaurants, and flights
        return view('pages.flights.results', compact('destination', 'hotels', 'restaurants', 'flights'));
    }

    // New method to display images of a destination
    public function showImages($id)
    {
        $destination = Destination::with('images')->find($id);

        if (!$destination) {
            return view('errors.404', ['message' => 'Destination not found.']);
        }

        return view('pages.destinations.images', ['destination' => $destination]);
    }
}
