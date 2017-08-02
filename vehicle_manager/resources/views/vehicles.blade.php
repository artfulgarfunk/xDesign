<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Vehicle Data </title>
  </head>
  <body>
    <h1> Vehicle Data </h1>
    <p> Name: <?= $vehicle->manufacturer; ?> <?= $vehicle->model; ?> </p> 
    <p> Type: <?= $vehicle->type; ?> </p>
    <p> Usage: <?= $vehicle->usage; ?> </p>
    <p> License: <?= $vehicle->license_plate; ?> </p>
    <p> Weight: <?= $vehicle->weight_category; ?> </p>
    <p> Seats: <?= $vehicle->no_seats; ?> </p>
    <p> Trailer: <?= $vehicle->has_trailer; ?> </p>
    <p> Owner: <?= $vehicle->owner_name; ?> </p>
    <p> Company: <?= $vehicle->owner_company; ?> </p>
    <p> Transmission: <?= $vehicle->transmission; ?> </p>
    <p> Colour: <?= $vehicle->colour; ?> </p>
    <p> HGV: <?= $vehicle->is_hgv; ?> </p>
    <p> Doors: <?= $vehicle->no_doors; ?> </p>
    <p> Sunroof: <?= $vehicle->sunroof; ?> </p>
    <p> GPS: <?= $vehicle->has_gps; ?> </p>
    <p> Wheels: <?= $vehicle->no_wheels; ?> </p>
    <p> Engine CC: <?= $vehicle->engine_cc; ?> </p>
    <p> Fuel: <?= $vehicle->fuel_type; ?> </p>
  </body>
</html>
