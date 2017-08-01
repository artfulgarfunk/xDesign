<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use XmlParser;
use Log;
use Illuminate\Support\Facades\Storage;


class VehicleController extends Controller
{
  public function show()
  {
    $bar = new \App\Vehicle();

    $payload = '<xml>
<Vehicle manufacturer="VW" model="Leaf">
<type>hybrid</type>
</Vehicle>
</xml>';

// $payload = File::get('VehicleSample.xml');

  $xml = XmlParser::extract($payload);
  // $xml = XmlParser::extract($payload);
  $user = $xml->parse([
      'id' => ['uses' => 'Vehicle.type'],
  ]);

    return view('vehicles', [
      'vehicle' => $user,
    ]);
  }
}
