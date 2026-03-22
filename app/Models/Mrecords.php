<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mrecords extends Model
{
 protected $fillable = [
        'signs',
        'lab results',
        'diagnoses',
        'imaging',
        'medication',
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
