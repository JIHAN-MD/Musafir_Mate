@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Travel Packages</h1>
    <a href="{{ route('travel_packages.create') }}" class="btn btn-primary mb-3">Add New Package</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Package Name</th>
                <th>Destination</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($travel_packages as $package)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->destination->name }}</td>
                    <td>RM{{ number_format($package->price, 2) }}</td>
                    <td>{{ $package->description }}</td>
                    <td>
                       <a href="{{ route('travel_packages.edit', $package->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        $dest<form action="{{ route('travel_packages.destroy', $package->id) }}" method="POST" style="display: inline;">ination->id
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    {{ $travel_packages->links() }}
</div>
@endsection
