@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Restaurant Name -->
    <h1 class="mb-3">{{ $restaurant->name }}</h1>
    <hr>

    <!-- Slideshow Section -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/images/restaurants.jpg') }}" class="d-block w-100" alt="r1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/rest1.jpg') }}" class="d-block w-100" alt="r2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/rest2.jpg') }}" class="d-block w-100" alt="r3">
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br><br>
    <style>
        .carousel-inner img {
    max-height: 400px; /* Set the maximum height */
    max-width: 800px; /* Set the maximum width */
    width: auto; /* Maintain aspect ratio */
    margin: auto; /* Center the image */}

.carousel-control-prev {
    left: 10%; /* Adjust the left position */
    width: 5%;
}

.carousel-control-next {
    right: 10%; /* Adjust the right position */
    width: 5%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-size: 100%; /* Ensure icons fit perfectly */
}


}
    </style>

    <!-- At a glance section -->
    <div class="row">
        <div class="col-md-8">
            <h5>At a glance</h5>
            <p><strong>Address:</strong> {{ $restaurant->address }}, {{ $restaurant->city }}, {{ $restaurant->country }}</p>
            <p><strong>Halal Certified:</strong> {{ $restaurant->halal_certified ? 'Yes' : 'No' }}</p>
            <p><strong>Contact:</strong> {{ $restaurant->phone ?? 'N/A' }}</p>
            <p><strong>Website:</strong><a href="{{ $restaurant->website ?? '#' }}" target="_blank" class="btn btn-link">Book on their website</a>

        </div>
        <div class="col-md-4 text-end">
            <button class="btn btn-outline-secondary">Save this restaurant</button>
        </div>
    </div>
    <hr>

    <!-- About Section -->
    <div>
        <h5>About</h5>
        <p>
            {{ $restaurant->description ?? 'No description available.' }}
        </p>
    </div>
    <hr>

    <!-- Hours Section -->
    <div>
        <h5>Hours</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Hours</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Sunday</td><td>9:00 AM - 11:00 PM</td></tr>
                <tr><td>Monday</td><td>9:00 AM - 11:00 PM</td></tr>
                <tr><td>Tuesday</td><td>9:00 AM - 11:00 PM</td></tr>
                <tr><td>Wednesday</td><td>9:00 AM - 11:00 PM</td></tr>
                <tr><td>Thursday</td><td>9:00 AM - 11:00 PM</td></tr>
                <tr><td>Friday</td><td>9:00 AM - 11:00 PM</td></tr>
                <tr><td>Saturday</td><td>9:00 AM - 11:00 PM</td></tr>
            </tbody>
        </table>
    </div>

    <!-- Back Button -->
    <div class="mt-4">
        <a href="{{ route('restaurant.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
