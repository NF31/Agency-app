<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuitsController extends Controller
{
     public function showBali()
    {
        return view('suites.bali');
    }

 public function showLondon()
    {
        return view('suites.london');
    }

    public function showMarrakech()
    {
        return view('suites.marrakech');
    }

 public function showNottingham()
    {
        return view('suites.nottingham');
    }

    public function showPhuket()
    {
        return view('suites.phuket');
    }


    public function showTokyo()
    {
        return view('suites.tokyo');
    }


}
