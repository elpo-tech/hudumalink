<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hrecords extends Model
{

    protected $fillable = [
        'hname',
        'hoslevel',
        'location',
        'hregno',
        'hos_services',
        'county',
        'subcounty',
        'ward',
        'village',
        'foth1',
        'foth2',
        'foth3',
        'foth4',
        'foth5',
        'foth6',
        'foth7',
        'foth8',
        'foth9',
        'foth10',
    ];
}
