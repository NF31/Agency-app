<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VillasController extends Controller
{
    public function showVilla()
    {
        return view('villas.villas');
    }

    public function showSuite()
    {
        return view('villas.suits');
    }


    public function showAfs()
    {
        return view('villas.afdusud');
    }

    public function showBirmingham()
    {
        return view('villas.birmingham');
    }



    public function showCannes()
    {
        return view('villas.cannes');
    }


    public function showHongKong()
    {
        return view('villas.hongkong');
    }

   public function showLagos()
    {
        return view('villas.lagos');
    }

    public function showMadrid()
    {
        return view('villas.madrid');
    }

    public function showMiami()
    {
        return view('villas.miami');
    }

    public function showOttawa()
    {
        return view('villas.ottawa');
    }



}
