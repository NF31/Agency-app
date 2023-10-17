<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallerysController extends Controller
{
    public function experiences()
    {
        return view('gallery.experiences');
    }

    public function privateBeach()
    {
        return view('gallery.private-beach');
    }
    public function restaurants()
    {
        return view('gallery.restaurants');
    }
    public function suitesPanoramiquesSuitesExecutives()
    {
        return view('gallery.suites-panoramiques-et-suites-executives');
    }
    public function suits()
    {
        return view('gallery.suits');
    }
    public function villas()
    {
        return view('gallery.villas');
    }
}
