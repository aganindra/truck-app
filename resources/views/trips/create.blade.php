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
    <h1>Add Trip</h1>

<form action="{{ route('trips.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="truck_id">Truck</label>
            <select name="truck_id" id="truck_id" class="form-control" required>
                <option value="">Select Truck</option>
                @foreach($trucks as $truck)
                    <option value="{{ $truck->id }}">{{ $truck->license_number }}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
        <label for="driver_id">Driver</label>
            <select name="driver_id" id="driver_id" class="form-control" required>
                <option value="">Select Driver</option>
                @foreach($drivers as $driver)
                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
        <label for="start_location">Start Location</label>
        <input type="text" name="start_location" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="end_location">End Location</label>
        <input type="text" name="end_location" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="distance">Distance (km)</label>
        <input type="number" name="distance" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="trip_date">Trip Date</label>
        <input type="date" name="trip_date" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Trip</button>
</form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Include your JavaScript here -->
</body>
</html>
