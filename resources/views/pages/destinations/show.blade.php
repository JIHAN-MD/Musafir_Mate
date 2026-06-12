@extends('layouts.app')

@section('content')
<!-- Carousel Section -->
<!-- Carousel Section -->
<div id="destinationCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($destination->images as $index => $image)
        <div class="carousel-item @if($index === 0) active @endif">
            <img src="{{ asset('frontend/images/' . $image->image_path) }}" class="d-block w-100" alt="Image {{ $index + 1 }}" style="height: 500px; object-fit: cover;">

            <!-- Text overlay -->
            <div class="carousel-caption d-flex justify-content-center align-items-center">
                <h1>{{ $destination->name }}</h1> <!-- Text centered over the image -->
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#destinationCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#destinationCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- Explore More About Destination Section -->
<div class="options mt-5">
    <h3>Explore More About {{ $destination->name }}</h3>
    <div class="row">
        <!-- Hotels -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('frontend/images/hotels.jpg') }}" alt="Hotel" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Hotels</h5>
                    <p class="card-text">Discover the best hotels in {{ $destination->name }}.</p>
                    <a href="{{ route('hotels.index', ['destination_id' => $destination->destination_id]) }}" class="btn btn-primary">View Hotels</a>
                </div>
            </div>
        </div>

        <!-- Restaurants -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('frontend/images/restaurants.jpg') }}" alt="Restaurant" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Restaurants</h5>
                    <p class="card-text">Explore the top restaurants in {{ $destination->name }}.</p>
                    <a href="{{ route('restaurant.index', ['destination_id' => $destination->destination_id]) }}" class="btn btn-primary">View Restaurants</a>
                </div>
            </div>
        </div>

        <!-- Travel Packages -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('frontend/images/travel.jpg') }}" alt="Travel Package" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Travel Packages</h5>
                   <!-- <p class="card-text">Check out the best travel packages for {{ $destination->name }}.</p>
                    <a href="{{ route('travel_packages.index', ['destination_id' => $destination->destination_id]) }}" class="btn btn-primary">View Travel Packages</a> -->
                    <p class="card-text">Check out the best travel packages .</p>
                    <a href="{{ route('travel_packages.index')}}" class="btn btn-primary">View Travel Packages</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back Button -->
<a href="{{ route('destinations.index') }}" class="btn btn-secondary mt-4">Back to All Destinations</a>
@endsection
