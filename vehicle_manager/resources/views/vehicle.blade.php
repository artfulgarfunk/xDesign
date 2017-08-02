<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vehicle Info</title>
  </head>
  <body>
    <p> Vehicle: {{ $vehicle['manufacturer'] }} {{ $vehicle['model'] }} </p>
    <p> Type: {{ $vehicle->type }}
    <p> Usage: {{ $vehicle->usage }}
    <p> License: {{ $vehicle->license_plate }}
    <p> Weight: {{ $vehicle->weight_category }}
    <p> Seats: {{ $vehicle->no_seats }}
    <p> Trailer: {{ $vehicle->has_trailer }}
    <p> Owner: {{ $vehicle->owner_name }}
    <p> Company: {{ $vehicle->owner_company }}
    <p> Transmission: {{ $vehicle->transmission }}
    <p> Colour: {{ $vehicle->colour }}
    <p> HGV: {{ $vehicle->is_hgv }}
    <p> Doors: {{ $vehicle->no_doors }}
    <p> Sunroof: {{ $vehicle->sunroof }}
    <p> GPS: {{ $vehicle->has_gps }}
    <p> Wheels: {{ $vehicle->no_wheels }}
    <p> Engine CC:{{ $vehicle->engine_cc }}
    <p> Fuel: {{ $vehicle->fuel_type }}
  </body>
</html>
