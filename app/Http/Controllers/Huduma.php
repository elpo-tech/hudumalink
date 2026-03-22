<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Huduma extends Controller
{
    public function login()
    {

        return view('login');
    }


    public function sign()
    {

        return view('sign');
    }
}
