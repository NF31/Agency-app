<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    public function destinations()
    {
        return view('destinations.destinations');
    }

    public function gallery()
    {
        return view('destinations.gallery');
    }
}
