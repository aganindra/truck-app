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
        <h1>Trip Details</h1>

        <!-- Trip Information -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Trip ID: {{ $trip->id }}</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Truck:</strong> 
                        {{ $trip->truck->license_number }} ({{ $trip->truck->model }})
                    </li>
                    <li class="list-group-item">
                        <strong>Driver:</strong> 
                        {{ $trip->driver->name }} (License: {{ $trip->driver->license_number }})
                    </li>
                    <li class="list-group-item">
                        <strong>Start Location:</strong> 
                        {{ $trip->start_location }}
                    </li>
                    <li class="list-group-item">
                        <strong>End Location:</strong> 
                        {{ $trip->end_location }}
                    </li>
                    <li class="list-group-item">
                        <strong>Distance:</strong> 
                        {{ $trip->distance }} km
                    </li>
                    <li class="list-group-item">
                        <strong>Trip Date:</strong> 
                        {{ \Carbon\Carbon::parse($trip->trip_date)->format('Y-m-d') }}
                    </li>
                </ul>
            </div>
        </div>



        <div class="mt-4 d-flex justify-content-end" style="gap: 10px;">
            <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-primary">Edit Trip</a>

            <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this trip?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Trip</button>
            </form>

            <!-- Back to Trips List -->
            <a href="{{ route('trips.index') }}" class="btn btn-secondary">Back to Trips</a>
        </div>


    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Include your JavaScript here -->
</body>
</html>
