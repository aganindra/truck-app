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
        <table class="table">
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
                @foreach ($trips as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{{ $trip->truck->license_number }}</td>
                        <td>{{ $trip->driver->name }}</td>
                        <td>{{ $trip->start_location }}</td>
                        <td>{{ $trip->end_location }}</td>
                        <td>{{ $trip->distance }} km</td>
                        <td>{{ \Carbon\Carbon::parse($trip->trip_date)->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this trip?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('trips.create') }}" class="btn btn-primary btn-lg">Add Trip</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Include your JavaScript here -->
</body>
</html>
