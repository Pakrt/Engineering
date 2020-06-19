<?php

namespace App\Http\Controllers;
use App\Component;
use Illuminate\Http\Request;

class MixingController extends Controller
{
    public function index ()
    {
        return view('maintenance.mixing.index');
    }

    public function the()
    {
        $the = Component::where('id_posisi', '341')
        ->get() ;
        return view('maintenance.mixing.the.index', compact('the'));
    }

    public function ndc()
    {
        $ndc = Component::where('id_posisi', '342')
        ->get() ;
        return view('maintenance.mixing.ndc.index', compact('ndc'));
    }

    public function powder1()
    {
        $powder1 = Component::where('id_posisi', '311')
        ->get() ;
        return view('maintenance.mixing.powder1.index', compact('powder1'));
    }

    public function powder2()
    {
        $powder2 = Component::where('id_posisi', '321')
        ->get() ;
        return view('maintenance.mixing.powder2.index', compact('powder2'));
    }

    public function acid()
    {
        $acid = Component::where('id_posisi', '331')
        ->get() ;
        return view('maintenance.mixing.acid.index', compact('acid'));
    }

    public function supply()
    {
        $supply = Component::where('id_posisi', '301')
        ->get() ;
        return view('maintenance.mixing.supply.index', compact('supply'));
    }

    public function mixing1()
    {
        $mixing1 = Component::where('id_posisi', '351')
        ->get() ;
        return view('maintenance.mixing.mixing1.index', compact('mixing1'));
    }

    public function mixing2()
    {
        $mixing2 = Component::where('id_posisi', '352')
        ->get() ;
        return view('maintenance.mixing.mixing2.index', compact('mixing2'));
    }

    public function mixing3()
    {
        $mixing3 = Component::where('id_posisi', '353')
        ->get() ;
        return view('maintenance.mixing.mixing3.index', compact('mixing3'));
    }

    public function mixing4()
    {
        $mixing4 = Component::where('id_posisi', '354')
        ->get() ;
        return view('maintenance.mixing.mixing4.index', compact('mixing4'));
    }

    public function mixing5()
    {
        $mixing5 = Component::where('id_posisi', '355')
        ->get() ;
        return view('maintenance.mixing.mixing5.index', compact('mixing5'));
    }
}
