<?php

namespace App\Http\Controllers;
use App\Component;
use Illuminate\Http\Request;

class PackagingController extends Controller
{
    public function index()
    {
        return view('maintenance.packaging.index');
    }

    public function pama()
    {
        $pama = Component::where('id_posisi', '111')
        ->get();
        return view('maintenance.packaging.pama.index', compact('pama'));
    }

    public function pamb()
    {
        $pamb = Component::where('id_posisi', '112')
        ->get();
        return view('maintenance.packaging.pamb.index', compact('pamb'));
    }

    public function pamc()
    {
        $pamc = Component::where('id_posisi', '113')
        ->get();
        return view('maintenance.packaging.pamc.index', compact('pamc'));
    }

    public function pamd()
    {
        $pamd = Component::where('id_posisi', '114')
        ->get();
        return view('maintenance.packaging.pamd.index', compact('pamd'));
    }

    public function karton()
    {
        $karton = Component::where('id_posisi', '121')
        ->get();
        return view('maintenance.packaging.karton.index', compact('karton'));
    }

    public function konveyorpama()
    {
        $konveyorpama = Component::where('id_posisi', '191')
        ->get();
        return view('maintenance.packaging.konveyorpama.index', compact('konveyorpama'));
    }

    public function konveyorpamb()
    {
        $konveyorpamb = Component::where('id_posisi', '192')
        ->get();
        return view('maintenance.packaging.konveyorpamb.index', compact('konveyorpamb'));
    }

    public function konveyorpamc()
    {
        $konveyorpamc = Component::where('id_posisi', '193')
        ->get();
        return view('maintenance.packaging.konveyorpamc.index', compact('konveyorpamc'));
    }

    public function konveyorpamd()
    {
        $konveyorpamd = Component::where('id_posisi', '194')
        ->get();
        return view('maintenance.packaging.konveyorpamd.index', compact('konveyorpamd'));
    }

    public function jb1()
    {
        $jb1 = Component::where('id_posisi', '131')
        ->get();
        return view('maintenance.packaging.jb1.index', compact('jb1'));
    }

    public function jb2()
    {
        $jb2 = Component::where('id_posisi', '132')
        ->get();
        return view('maintenance.packaging.jb2.index', compact('jb2'));
    }
}
