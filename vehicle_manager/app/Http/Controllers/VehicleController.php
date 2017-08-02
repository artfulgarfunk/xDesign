<?php

namespace App\Http\Controllers;

// use App\User;
use App\Http\Controllers\Controller;
use XmlParser;
use Illuminate\Support\Facades\Storage;


class VehicleController extends Controller
{
  public function show()
  {

    $vehicle = \App\Vehicle::find(1);
    if($vehicle == null) {
    };
    $this->populate();

    return view('vehicles', [
      'vehicle' => $vehicle,
    ]);
  }

  public function populate() {
    $payload = Storage::get('VehicleSample.xml');
    $xml = XmlParser::extract($payload);
    $parsed_xml = $xml->parse([
      'manufacturer' => ['uses' => 'Vehicle::manufacturer'],
      'model' => ['uses' => 'Vehicle::model'],
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

    $instance = \App\Vehicle::create([
      'manufacturer' => $parsed_xml['manufacturer'],
      'model' => $parsed_xml['model'],
      'type' => $parsed_xml['type'],
      'usage' => $parsed_xml['usage'],
      'license_plate' => $parsed_xml['license_plate'],
      'weight_category' => $parsed_xml['weight_category'],
      'no_seats' => $parsed_xml['no_seats'],
      'has_trailer' => $parsed_xml['has_trailer'],
      'owner_name' => $parsed_xml['owner_name'],
      'owner_company' => $parsed_xml['owner_company'],
      'owner_profession' => $parsed_xml['owner_profession'],
      'transmission' => $parsed_xml['transmission'],
      'colour' => $parsed_xml['colour'],
      'is_hgv' => $parsed_xml['is_hgv'],
      'no_doors' => $parsed_xml['no_doors'],
      'sunroof' => $parsed_xml['sunroof'],
      'has_gps' => $parsed_xml['has_gps'],
      'no_wheels' => $parsed_xml['no_wheels'],
      'engine_cc' => $parsed_xml['engine_cc'],
      'fuel_type' => $parsed_xml['fuel_type']
    ]);
    $instance->save();
  }
}
