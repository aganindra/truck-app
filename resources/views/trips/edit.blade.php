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
        <h1>Edit Trip</h1>

<!-- Display any validation errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Trip Edit Form -->
    <form action="{{ route('trips.update', $trip->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="truck_id">Truck</label>
            <select name="truck_id" id="truck_id" class="form-control">
                <option value="">Select a Truck</option>
                @foreach($trucks as $truck)
                    <option value="{{ $truck->id }}" {{ $trip->truck_id == $truck->id ? 'selected' : '' }}>
                        {{ $truck->license_number }} ({{ $truck->model }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="driver_id">Driver</label>
            <select name="driver_id" id="driver_id" class="form-control">
                <option value="">Select a Driver</option>
                @foreach($drivers as $driver)
                    <option value="{{ $driver->id }}" {{ $trip->driver_id == $driver->id ? 'selected' : '' }}>
                        {{ $driver->name }} ({{ $driver->license_number }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="start_location">Start Location</label>
            <input type="text" name="start_location" id="start_location" class="form-control" value="{{ $trip->start_location }}">
        </div>

        <div class="form-group">
            <label for="end_location">End Location</label>
            <input type="text" name="end_location" id="end_location" class="form-control" value="{{ $trip->end_location }}">
        </div>

        <div class="form-group">
            <label for="distance">Distance (km)</label>
            <input type="number" name="distance" id="distance" class="form-control" value="{{ $trip->distance }}">
        </div>

        <div class="form-group">
            <label for="trip_date">Trip Date</label>
            <input type="date" name="trip_date" id="trip_date" class="form-control" value="{{ $trip->trip_date }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Trip</button>
    </form>

<!-- Back to trips list -->
<a href="{{ route('trips.index') }}" class="btn btn-secondary mt-3">Back to Trips</a>
</div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Include your JavaScript here -->
</body>
</html>
