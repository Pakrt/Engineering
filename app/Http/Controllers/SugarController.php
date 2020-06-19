<?php

namespace App\Http\Controllers;
use App\Component;
use Illuminate\Http\Request;

class SugarController extends Controller
{
    public function index()
    {
        return view('maintenance.sugar.index');
    }

    public function desinfektan()
    {
        $desinfektan = Component::where('id_posisi', '411')
        ->get() ;
        return view('maintenance.sugar.desinfektan.index', compact('desinfektan'));
    }

    public function hotwater()
    {
        $hotwater = Component::where('id_posisi', '421')
        ->get() ;
        return view('maintenance.sugar.hotwater.index', compact('hotwater'));
    }

    public function syrup()
    {
        $syrup = Component::where('id_posisi', '431')
        ->get() ;
        return view('maintenance.sugar.syrup.index', compact('syrup'));
    }

    public function steam()
    {
        $steam = Component::where('id_posisi', '401')
        ->get() ;
        return view('maintenance.sugar.steam.index', compact('steam'));
    }

    public function water()
    {
        $water = Component::where('id_posisi', '402')
        ->get() ;
        return view('maintenance.sugar.water.index', compact('water'));
    }
}
