<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dash extends Controller
{
    public function dash()
    {

        return view('dashboard.dashb');
    }


    public function pro()
    {

        return view('dashboard.profile');
    }


    public function pat()
    {

        return view('dashboard.patdetail');
    }
}
