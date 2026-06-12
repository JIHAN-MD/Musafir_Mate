<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TravelPackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\HomeController;
use App\Models\Destination;
use App\Models\Prayer;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\FlightController;
use App\Models\TravelPackage;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Registration Route
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// User Dashboard
Route::get('/user-dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');

// Destinations
Route::resource('destinations', DestinationController::class);
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('/destinations/{destination}', [DestinationController::class, 'show'])->name('destinations.show');
Route::post('/destinations/submit', [DestinationController::class, 'submit'])->name('destinations.submit');

// New Route for Showing Destination Images
Route::get('/destinations/{id}/images', [DestinationController::class, 'showImages'])->name('destinations.images');

// Hotels
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/{destination_id}', [HotelController::class, 'byDestination'])->name('hotels.byDestination');
Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');

// Restaurants
Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurant.index');
//Route::get('/restaurants/nav', [RestaurantController::class, 'navRestaurant'])->name('restaurant.navRestaurant');
Route::get('/restaurants/{restaurant_id}', [RestaurantController::class, 'show'])->name('restaurant.show');
Route::get('/restaurants/destination/{destination_id}', [RestaurantController::class, 'byDestination'])->name('restaurant.byDestination');
Route::post('/restaurants/save', [RestaurantController::class, 'save'])->name('restaurant.save');
Route::get('/restaurants/saved', [RestaurantController::class, 'saved'])->name('restaurant.save');

// Travel Packages
//Route::get('/travel_packages', [TravelPackageController::class, 'index'])->name('travel_packages.index');
Route::resource('travel_packages', TravelPackageController::class);


// Additional route for filtering packages by destination
Route::get('/travel_packages/destination/{destination_id}', [TravelPackageController::class, 'byDestination'])
    ->name('travel_packages.byDestination');

// Bulk Delete Route
Route::delete('/travel_packages/bulk-delete', [TravelPackageController::class, 'bulkDelete'])
    ->name('travel_packages.bulk_delete');

// Bookings
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings');
Route::get('/booking/{flight_id}', [BookingController::class, 'show'])->name('booking.page');

// Payments
Route::resource('payments', PaymentController::class);

// Prayers
Route::get('/prayer-space', [PrayerController::class, 'index'])->name('prayer-space');
Route::get('/api/prayer-times', [PrayerController::class, 'getPrayerTimes']);
Route::get('/api/qiblah', [PrayerController::class, 'getQiblahDirection']);
Route::get('/api/nearby-mosques', [PrayerController::class, 'getNearbyMosques']);

// Flights
Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');
Route::post('/flights/search', [FlightController::class, 'search'])->name('flights.search');
Route::get('/flights/book/{flight_id}', [FlightController::class, 'book'])->name('flights.book');
Route::post('/flights/book/{flight_id}', [FlightController::class, 'book'])->name('flights.book.submit');
Route::get('flights/confirmation', function () {
    return view('pages.flights.confirmation');
})->name('flights.confirmation');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
