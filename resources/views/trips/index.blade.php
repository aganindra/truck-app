<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trips</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Trips</h1>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('trips.index') }}" method="GET" class="mb-4">
        <div class="form-group row">
            <label for="driver_id" class="col-sm-2 col-form-label">Filter by Driver:</label>
            <div class="col-sm-6">
                <select name="driver_id" id="driver_id" class="form-control">
                    <option value="">All Drivers</option>
                    @foreach($drivers as $driver)
                        <option value="{{ $driver->id }}" {{ request('driver_id') == $driver->id ? 'selected' : '' }}>
                            {{ $driver->name }} (License: {{ $driver->license_number }})
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="{{ route('trips.index') }}" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>

    <!-- Trips Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Truck</th>
                <th>Driver</th>
                <th>Start Location</th>
                <th>End Location</th>
                <th>Distance</th>
                <th>Trip Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trips as $trip)
            <tr>
                <td>{{ $trip->id }}</td>
                <td>{{ $trip->truck->license_number }} ({{ $trip->truck->model }})</td>
                <td>{{ $trip->driver->name }} (License: {{ $trip->driver->license_number }})</td>
                <td>{{ $trip->start_location }}</td>
                <td>{{ $trip->end_location }}</td>
                <td>{{ $trip->distance }} km</td>
                <td>{{ \Carbon\Carbon::parse($trip->trip_date)->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('trips.show', $trip->id) }}" class="btn btn-primary btn-sm">Show</a>
                    <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this trip?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <a href="{{ route('trips.create') }}" class="btn btn-primary btn-lg">Add Trip</a>
        <a href="{{ route('dashboard.index') }}" class="btn btn-secondary btn-lg">Dashboard</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Include your JavaScript here -->
</body>
</html>
