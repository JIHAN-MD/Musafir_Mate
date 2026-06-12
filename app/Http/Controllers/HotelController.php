<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
{
    $destination_id = $request->query('destination_id');
    $destination = null;

    if ($destination_id) {
        $destination = Destination::find($destination_id);
        if (!$destination) {
            return redirect()->route('destinations.index')->with('error', 'Destination not found.');
        }
        $hotels = Hotel::where('destination_id', $destination_id)->get();
    } else {
        $hotels = Hotel::all();
    }

    return view('pages.hotels.index', compact('hotels', 'destination'));
}

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        Hotel::create($request->all());
        return redirect()->route('pages.hotels.index');
    }

    public function byDestination($destination_id)
    {
        // Fetch the destination details
        $destination = Destination::findOrFail($destination_id);

        // Fetch hotels related to this destination
        $hotels = Hotel::where('destination_id', $destination_id)->paginate(10);

        // Pass both hotels and destination to the view
        return view('pages.hotels.index', compact('hotels', 'destination'));
    }
}
