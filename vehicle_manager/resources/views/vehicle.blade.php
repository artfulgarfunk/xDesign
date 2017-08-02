<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vehicle Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="jumbotron home">
        <h2> {{ $vehicle['manufacturer'] }} {{ $vehicle['model'] }} </h2>
        <p> Type: {{ $vehicle->type }} </p>
        <p> Usage: {{ $vehicle->usage }} </p>
        <p> License: {{ $vehicle->license_plate }} </p>
        <p> Weight Category: {{ $vehicle->weight_category }} </p>
        <p> Seats: {{ $vehicle->no_seats }} </p>
        <p> Trailer:
            @if ($vehicle->has_trailer == 0)
              No
            @else
              Yes
            @endif
       </p>
        <p> Owner: {{ $vehicle->owner_name }} </p>
        <p> Company: {{ $vehicle->owner_company }} </p>
        <p> Transmission: {{ $vehicle->transmission }} </p>
        <p> Colour: {{ $vehicle->colour }} </p>
        <p> HGV:
              @if ($vehicle->is_hgv == "true" )
                  Yes
              @else
                  No
              @endif
        </p>
        <p> Doors: {{ $vehicle->no_doors }} </p>
        <p> Sunroof:
            @if ($vehicle->sunroof == "true")
                Yes
            @else
                No
            @endif
        </p>
        <p> GPS:
              @if ($vehicle->has_gps == "true")
                  Yes
              @else
                  No
              @endif
        </p>
        <p> Wheels: {{ $vehicle->no_wheels }} </p>
        <p> Engine CC: {{ $vehicle->engine_cc }} </p>
        <p> Fuel Type: {{ $vehicle->fuel_type }} </p>

        {{ Form::open(array('method' => 'get', 'action' => array('VehicleController@index'))) }}
          <button type="submit" class="btn btn-info btn-lg"/>
             All Vehicles
          </button>
        {{ Form::close() }}
      </div>
    </div>
  </body>
</html>
