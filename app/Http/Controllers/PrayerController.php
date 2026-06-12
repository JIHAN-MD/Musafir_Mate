<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PrayerController extends Controller
{
    public function index()
    {
        // This method returns the prayer space view
        return view('pages.prayer-space'); // Ensure the view file exists in resources/views
    }

    public function getPrayerTimes(Request $request)
    {
        $latitude = $request->query('lat');
        $longitude = $request->query('lng');

        $response = Http::get('https://api.aladhan.com/v1/timings', [
            'latitude' => $latitude,
            'longitude' => $longitude,
            'method' => 2, // Calculation method
        ]);

        $prayerTimes = $response->json();

        return response()->json(['html' => view('partials.prayer-times', ['times' => $prayerTimes['data']['timings']])->render()]);
    }

    public function getQiblahDirection(Request $request)
    {
        $latitude = $request->query('lat');
        $longitude = $request->query('lng');

    $response = Http::get('https://api.aladhan.com/v1/qibla', [
        'latitude' => $latitude,
        'longitude' => $longitude,
    ]);

    $qiblah = $response->json();

    return response()->json(['direction' => $qiblah['data']['direction']]);
    }

    public function getNearbyMosques(Request $request)
    {
        $latitude = $request->query('lat');
        $longitude = $request->query('lng');

        // Replace with your Google Maps API Key
        $apiKey = env('AIzaSyAHKFm_brpjhvWzdC_4rMUUjGfjFHZjTwA');

        $response = Http::get("https://maps.googleapis.com/maps/api/place/nearbysearch/json", [
            'location' => "$latitude,$longitude",
            'radius' => 5000, // 5km radius
            'type' => 'mosque',
            'key' => $apiKey,
        ]);

        $mosques = $response->json();

        return response()->json(['mapUrl' => "https://www.google.com/maps?q=mosques+near+$latitude+$longitude"]);
    }

}
