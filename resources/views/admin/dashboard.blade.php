<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h1 class="mb-4 text-center">Admin Dashboard</h1>

    <div class="row g-3">
        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Shipments</div>
                <div class="card-body">
                    @foreach ($shipments as $shipment)
                        <p>
                            <strong>{{ $shipment->origin }} ➜ {{ $shipment->destination }}</strong><br>
                            Status: {{ $shipment->status }}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Timeline</div>
                <div class="card-body">
                    @foreach ($timelineEntries as $entry)
                        <p>
                            #{{ $entry->shipment_id }} - {{ $entry->stage }}<br>
                            {{ $entry->notes }}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Inventory</div>
                <div class="card-body">
                    @foreach ($inventory as $item)
                        <p>{{ $item->product_name }} ({{ $item->quantity }})</p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Trackers</div>
                <div class="card-body">
                    @foreach ($trackers as $tracker)
                        <p>
                            RFID: {{ $tracker->rfid_code }}<br>
                            Temp: {{ $tracker->temperature }}°C
                        </p>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Warehouses</div>
                <div class="card-body">
                    @foreach ($warehouses as $warehouse)
                        <p>{{ $warehouse->name }} ({{ $warehouse->capacity }})</p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Alerts</div>
                <div class="card-body">
                    @foreach ($alerts as $alert)
                        <p>{{ $alert->type }}: {{ $alert->message }}</p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Ports</div>
                <div class="card-body">
                    @foreach ($ports as $port)
                        <p>{{ $port->name }} - {{ $port->status }}</p>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-header">Users</div>
                <div class="card-body">
                    @foreach ($users as $user)
                        <p>{{ $user->name }} - {{ $user->role }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- MAP Section -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Map</div>
                <div class="card-body">
                    <div id="map" style="height: 400px; background: #eee; text-align: center; line-height: 400px;">
                        [MAP WILL GO HERE]
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional: JS for Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
