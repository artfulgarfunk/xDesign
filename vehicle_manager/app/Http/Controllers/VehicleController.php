<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use XmlParser;
use Illuminate\Support\Facades\Storage;
use Log;


class VehicleController extends Controller
{
  public function show()
  {

    $vehicle = \App\Vehicle::find(1);
    if($vehicle == null) {
      $this->populate();
    };

    return view('vehicles', [
      'vehicle' => $vehicle,
    ]);
  }

  public function populate() {
    $payload = Storage::get('VehicleSample.xml');
    $xml = XmlParser::extract($payload);
    $user = $xml->parse([
      'type' => ['uses' => 'Vehicle.type'],
      'usage' => ['uses' => 'Vehicle.usage'],
      'license_plate' => ['uses' => 'Vehicle.license_plate'],
      'weight_category' => ['uses' => 'Vehicle.weight_category'],
      'no_seats' => ['uses' => 'Vehicle.no_seats'],
      'has_trailer' => ['uses' => 'Vehicle.has_trailer'],
      'owner_name' => ['uses' => 'Vehicle.owner_name'],
      'owner_company' => ['uses' => 'Vehicle.owner_company'],
      'owner_profession' => ['uses' => 'Vehicle.owner_profession'],
      'transmission' => ['uses' => 'Vehicle.transmission'],
      'colour' => ['uses' => 'Vehicle.colour'],
      'is_hgv' => ['uses' => 'Vehicle.is_hgv'],
      'no_doors' => ['uses' => 'Vehicle.no_doors'],
      'sunroof' => ['uses' => 'Vehicle.sunroof'],
      'has_gps' => ['uses' => 'Vehicle.has_gps'],
      'no_wheels' => ['uses' => 'Vehicle.no_wheels'],
      'engine_cc' => ['uses' => 'Vehicle.engine_cc'],
      'fuel_type' => ['uses' => 'Vehicle.fuel_type'],
    ]);

    $bar = \App\Vehicle::create([
      'type' => $user['type'],
      'usage' => $user['usage'],
      'license_plate' => $user['license_plate'],
      'weight_category' => $user['weight_category'],
      'no_seats' => $user['no_seats'],
      'has_trailer' => $user['has_trailer'],
      'owner_name' => $user['owner_name'],
      'owner_company' => $user['owner_company'],
      'owner_profession' => $user['owner_profession'],
      'transmission' => $user['transmission'],
      'colour' => $user['colour'],
      'is_hgv' => $user['is_hgv'],
      'no_doors' => $user['no_doors'],
      'sunroof' => $user['sunroof'],
      'has_gps' => $user['has_gps'],
      'no_wheels' => $user['no_wheels'],
      'engine_cc' => $user['engine_cc'],
      'fuel_type' => $user['fuel_type']
    ]);
    $bar->save();
  }
}
