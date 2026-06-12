@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Travel Package</h1>

    <form action="{{ route('travel_packages.update', $travel_package->package_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="destination_id" class="form-label">Destination</label>
            <select name="destination_id" id="destination_id" class="form-select" required>
                @foreach ($destinations as $destination)
                    <option value="{{ $destination->destination_id }}"
                        {{ $destination->destination_id == $travel_package->destination_id ? 'selected' : '' }}>
                        {{ $destination->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Package Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $travel_package->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $travel_package->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $travel_package->price }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Package</button>
    </form>
</div>
@endsection
