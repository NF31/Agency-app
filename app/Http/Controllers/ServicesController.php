<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function activities()
    {
        return view('départments.activities');
    }

    public function boat()
    {
        return view('départments.boat');
    }

    public function massage()
    {
        return view('départments.massage');
    }
 public function restaurants()
    {
        return view('départments.restaurants');
    }

    public function services()
    {
        return view('départments.services');
    }

    public function wedding()
    {
        return view('départments.wedding');
    }
}
