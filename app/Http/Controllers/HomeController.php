<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage; // Correct namespace
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(['destination'])->get(); // Ensure 'destination' relationship is used if required
        return view('pages.home', [
            'items' => $items
        ]);
    }
}
