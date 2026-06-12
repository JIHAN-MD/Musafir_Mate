@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Saved Restaurants</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($restaurants->isEmpty())
        <p>No restaurants saved yet.</p>
    @else
        <div class="row">
            @foreach ($restaurants as $restaurant)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $restaurant->name }}</h5>
                            <p class="card-text">{{ $restaurant->address }}, {{ $restaurant->city }}, {{ $restaurant->country }}</p>
                            <p class="card-text">Halal Certified: {{ $restaurant->halal_certified ? 'Yes' : 'No' }}</p>
                            <p class="card-text">Rating: {{ $restaurant->rating ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <a href="{{ route('restaurant.index') }}" class="btn btn-secondary mt-4">Back to List</a>
</div>
@endsection
