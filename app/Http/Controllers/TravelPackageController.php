<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Models\Destination;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    public function index()
    {
        $travel_packages = TravelPackage::with('destination')->paginate(10);
        return view('pages.travel_packages.index', compact('travel_packages'));
    }

    public function create()
    {
        $destinations = Destination::all();
        return view('pages.travel_packages.create', compact('destinations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'destination_id' => 'required|exists:destinations,destination_id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('frontend/images'), $imageName);
            $validated['image'] = $imageName;
        }

        TravelPackage::create($validated);

        return redirect()->route('travel_packages.index')
            ->with('success', 'Travel package created successfully!');
    }

    public function show($id)
    {
        $travel_package = TravelPackage::with('destination')->findOrFail($id);
        return view('pages.travel_packages.show', compact('travel_package'));
    }

    public function edit($id)
    {
        $travel_package = TravelPackage::findOrFail($id);
        $destinations = Destination::all();
        return view('pages.travel_packages.edit', compact('travel_package', 'destinations'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'destination_id' => 'required|exists:destinations,destination_id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $travelPackage = TravelPackage::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('frontend/images'), $imageName);
            $validated['image'] = $imageName;
        }

        $travelPackage->update($validated);

        return redirect()->route('travel_packages.index')
            ->with('success', 'Travel package updated successfully!');
    }

    public function destroy($id)
    {
        $travelPackage = TravelPackage::findOrFail($id);
        $travelPackage->delete();

        return redirect()->route('travel_packages.index')
            ->with('success', 'Travel package deleted successfully!');
    }

    public function byDestination($destination_id)
    {
        $travel_packages = TravelPackage::where('destination_id', $destination_id)->paginate(10);
        return view('pages.travel_packages.index', compact('travel_packages'));
    }
}