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
            <h1>Dashboard</h1>

        <div style="margin-top: 10rem;" class="row">
            <!-- Total Trips Today Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Trips Today</h5>
                        <p class="card-text text-center">{{ $totalTripsToday }}</p>
                    </div>
                </div>
            </div>

            <!-- Trucks Expiring KIR Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Trucks Expiring KIR</h5>
                        <p class="card-text text-center">{{ $trucksExpiringKir }} Unit</p>
                    </div>
                </div>
            </div>

            <!-- Trucks Expiring SIM Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Drivers Expiring SIM</h5>
                        <p class="card-text text-center">{{ $driversExpiringSim }} Person</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
        <a href="{{ route('trips.index') }}" class="btn btn-primary btn-lg">Trip List</a>
    </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Include your JavaScript here -->
</body>
</html>
