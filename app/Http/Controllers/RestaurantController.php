<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RestaurantController extends Controller
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
        $restaurants = Restaurant::where('destination_id', $destination_id)->get();
    } else {
        $restaurants = Restaurant::all();
    }

    return view('pages.restaurant.index', compact('restaurants', 'destination'));
}

    public function navRestaurant()
    {
        // This will fetch all restaurants and paginate them
        $restaurants = Restaurant::with('destination')->paginate(10);
        return view('pages.restaurant.navRestaurant', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        Restaurant::create($request->all());
        return redirect()->route('pages.restaurant.index');
    }

    public function show($restaurant_id)
    {

        // Retrieve the restaurant by ID
        $restaurant = Restaurant::findOrFail($restaurant_id);
        return view('pages.restaurant.show', compact('restaurant'));
    }

    public function save(Request $request)
    {
        // Retrieve saved restaurants from the session
        $savedRestaurants = Session::get('saved_restaurants', []);

        // Add the restaurant ID if not already saved
        if (!in_array($request->restaurant_id, $savedRestaurants)) {
            $savedRestaurants[] = $request->restaurant_id;
            Session::put('saved_restaurants', $savedRestaurants);
        }

        return redirect()->back()->with('success', 'Restaurant added to your saved list!');
    }

    public function saved()
    {
        // Retrieve saved restaurant IDs from the session
        $savedRestaurants = Session::get('saved_restaurants', []);

        // Fetch restaurant details from the database
        $restaurants = Restaurant::whereIn('id', $savedRestaurants)->get();

        return view('pages.restaurant.save', compact('restaurants'));
    }

    public function byDestination($destination_id)
    {
        // Fetch the destination details
        $destination = Destination::findOrFail($destination_id);

        // Fetch restaurants related to this destination
        $restaurants = Restaurant::where('destination_id', $destination_id)->paginate(10);

        return view('pages.restaurant.index', compact('restaurants', 'destination'));
    }
}
