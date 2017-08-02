<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use XmlParser;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
  public function show($id)
  {
    $vehicle = \App\Vehicle::find($id);
    return view('vehicle',['vehicle' => $vehicle]);
  }

  public function index()
  {
    // IF DB EMPTY, POPULATE WITH GIVEN DATA
    $vehicle = \App\Vehicle::find(1);
    if ($vehicle == null) {
      $path = resource_path('xml/VehicleSample.xml');
      $parsed_xml = simplexml_load_file($path);
      $this->populate($parsed_xml);
    }

    $vehicles= \App\Vehicle::all();
    return view('vehicles', [
      'vehicles' => $vehicles,
    ]);
  }

  public function populate($parsed_xml) {
    for ($i = 0; $i < 19; $i ++) {
    $vehicle = $parsed_xml->Vehicle[$i];
      $this->save_single_instance($vehicle);
    }
  }

  public function save_single_instance()
  {
    $instance = \App\Vehicle::create([
      'manufacturer' => $vehicle['manufacturer'],
      'model' => $vehicle['model'],
      'type' => $vehicle->type,
      'usage' => $vehicle->usage,
      'license_plate' => $vehicle->license_plate,
      'weight_category' => $vehicle->weight_category,
      'no_seats' => $vehicle->no_seats,
      'has_trailer' => $vehicle->has_trailer,
      'owner_name' => $vehicle->owner_name,
      'owner_company' => $vehicle->owner_company,
      'owner_profession' => $vehicle->owner_profession,
      'transmission' => $vehicle->transmission,
      'colour' => $vehicle->colour,
      'is_hgv' => $vehicle->is_hgv,
      'no_doors' => $vehicle->no_doors,
      'sunroof' => $vehicle->sunroof,
      'has_gps' => $vehicle->has_gps,
      'no_wheels' => $vehicle->no_wheels,
      'engine_cc' => $vehicle->engine_cc,
      'fuel_type' => $vehicle->fuel_type
    ]);
    $instance->save();
  }


}
