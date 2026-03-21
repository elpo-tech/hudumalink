<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Huduma extends Controller
{
    public function dash()
    {

        return view('dashboard.dashb');
    }


    public function hey()
    {

        return view('welcome');
    }
}
