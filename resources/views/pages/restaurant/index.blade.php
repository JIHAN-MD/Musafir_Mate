@extends('layouts.app')

@section('title', 'Restaurants')

@section('content')
<main>
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            @if($destination)
                <h1 class="mb-4">Restaurant in {{ $destination->name }}</h1>
            @else
                <h1 class="mb-4">Restaurant</h1>
            @endif

            <div>
                <!-- Button to Saved Restaurants -->
                <a href="{{ route('restaurant.save') }}" class="btn btn-primary mb-3">Saved Restaurants</a>
                <br>
                <!-- Sort Dropdown -->
                <form action="{{ route('restaurant.index') }}" method="GET" class="d-inline">
                    @if($destination)
                        <input type="hidden" name="destination_id" value="{{ $destination->id }}">
                    @endif
                    <select name="sort_by" class="form-select d-inline w-auto" onchange="this.form.submit()">
                        <option value="" disabled selected>Sort By</option>
                        <option value="rating" {{ request('sort_by') === 'rating' ? 'selected' : '' }}>Rating</option>
                        <option value="halal_certified" {{ request('sort_by') === 'halal_certified' ? 'selected' : '' }}>Halal Certified</option>
                    </select>
                </form>

            </div>
        </div>

        <div class="row">
            @foreach ($restaurants as $restaurant)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $restaurant->name }}</h5>
                            <p class="card-text">{{ $restaurant->address }}, {{ $restaurant->city }}, {{ $restaurant->country }}</p>
                            <p class="card-text">Halal Certified: {{ $restaurant->halal_certified ? 'Yes' : 'No' }}</p>
                            <p class="card-text">Rating: {{ $restaurant->rating ?? 'N/A' }}</p>
                            <a href="{{ route('restaurant.show', ['restaurant_id' => $restaurant->restaurant_id]) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <br>
        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Back</a>
    </div>
</main>
@endsection
