<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dash extends Controller
{
    public function dash()
    {

        return view('dashboard.temp');
    }


    public function pro()
    {

        return view('dashboard.profile');
    }
}
