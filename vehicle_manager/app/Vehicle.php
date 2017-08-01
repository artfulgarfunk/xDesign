<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

  protected $table = 'vehicles';
  protected $fillable = ['type',
                        'usage',
                        'license_plate',
                        'weight_category',
                        'no_seats',
                        'has_trailer',
                        'owner_name',
                        'owner_company',
                        'owner_profession',
                        'transmission',
                        'colour',
                        'is_hgv',
                        'no_doors',
                        'sunroof',
                        'has_gps',
                        'no_wheels',
                        'engine_cc',
                        'fuel_type'
                        ];
  // protected $typo;
  // public $usage;
  // public $license_plate;
  // public $weight_category;
  // public $no_seats;
  // public $has_trailer;
  // public $owner_name;
  // public $owner_company;
  // public $owner_profession;
  // public $transmission;
  // public $colour;
  // public $is_hgv;
  // public $no_doors;
  // public $sunroof;
  // public $has_gps;
  // public $no_wheels;
  // public $engine_cc;
  // public $fuel_type;


  // public function __construct($type) {
  //   $this->type = $type;
    // $this->usage = $usage;
  //   // $this->license_plate = $license_plate;
  //   // $this->weight_category = $weight_category;
  //   // $this->no_seats = $no_seats;
  //   // $this->has_trailer = $has_trailer;
  //   // $this->owner_name = $owner_name;
  //   // $this->owner_company = $owner_company;
  //   // $this->owner_profession = $owner_profession;
  //   // $this->transmission = $transmission;
  //   // $this->colour = $colour;
  //   // $this->is_hgv = $is_hgv;
  //   // $this->no_doors = $no_doors;
  //   // $this->sunroof = $sunroof;
  //   // $this->has_gps = $has_gps;
  //   // $this->no_wheels = $no_wheels;
  //   // $this->engine_cc = $engine_cc;
  //   // $this->fuel_type = $fuel_type;
  //
  //
  // }
}

// $type, $usage, $license_plate, $weight_category, $no_seats, $has_trailer, $owner_name, $owner_company, $owner_profession, $transmission, $colour, $is_hgv, $no_doors, $sunroof, $has_gps, $no_wheels, $engine_cc, $fuel_type
