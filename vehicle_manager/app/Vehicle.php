<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

  protected $table = 'vehicles';
  protected $fillable = ['manufacturer',
                        'model',
                        'type',
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
}
