@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $travel_package->name }}</h1>
    <p><strong>Destination:</strong> {{ $travel_package->destination->name }}</p>
    <p><strong>Description:</strong> {{ $travel_package->description }}</p>
    <p><strong>Price:</strong> RM{{ number_format($travel_package->price, 2) }}</p>

    <a href="{{ route('travel_packages.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
