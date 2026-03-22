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

    public function patr()
    {

        return view('dashboard.patrecord');
    }


    public function hosi()
    {

        return view('dashboard.hosi');
    }

    public function serv()
    {

        return view('dashboard.serv');
    }


    public function insure()
    {

        return view('dashboard.insure');
    }


    public function admit()
    {

        return view('dashboard.admit');
    }

    public function app()
    {

        return view('dashboard.app');
    }



    public function gen()
    {

        return view('dashboard.gen');
    }


    public function user()
    {

        return view('dashboard.user');
    }

    public function log()
    {

        return view('dashboard.log');
    }
}
