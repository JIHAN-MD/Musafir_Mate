@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Travel Package</h1>

    <form action="{{ route('travel_packages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="destination_id" class="form-label">Destination</label>
            <select name="destination_id" id="destination_id" class="form-select" required>
                <option value="">Select a Destination</option>
                @foreach ($destinations as $destination)
                    <option value="{{ $destination->destination_id }}">{{ $destination->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Package Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Package</button>
    </form>
</div>
@endsection
