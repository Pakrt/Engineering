<?php

namespace App\Http\Controllers;
use App\Component;
use Illuminate\Http\Request;

class FillingController extends Controller
{
    public function index()
    {
        return view('maintenance.filling.index');
    }

    public function gf1()
    {
        $gf1 = Component::where('id_posisi', '211')
        ->get();
        return view('maintenance.filling.gf1.index', compact('gf1'));
    }

    public function gf2()
    {
        $gf2 = Component::where('id_posisi', '212')
        ->get();
        return view('maintenance.filling.gf2.index', compact('gf2'));
    }

    public function gf3()
    {
        $gf3 = Component::where('id_posisi', '213')
        ->get();
        return view('maintenance.filling.gf3.index', compact('gf3'));
    }

    public function gf4()
    {
        $gf4 = Component::where('id_posisi', '214')
        ->get();
        return view('maintenance.filling.gf4.index', compact('gf4'));
    }

    public function gf5()
    {
        $gf5 = Component::where('id_posisi', '215')
        ->get();
        return view('maintenance.filling.gf5.index', compact('gf5'));
    }

    public function konveyorfilling()
    {
        $konveyorfilling = Component::where('id_posisi', '221')
        ->get();
        return view('maintenance.filling.konveyorfilling.index', compact('konveyorfilling'));
    }

    public function transferpasteur()
    {
        $transferpasteur = Component::where('id_posisi', '291')
        ->get();
        return view('maintenance.filling.transferpasteur.index', compact('transferpasteur'));
    }

    public function pasteur()
    {
        $pasteur = Component::where('id_posisi', '231')
        ->get();
        return view('maintenance.filling.pasteur.index', compact('pasteur'));
    }

    public function transfercooling()
    {
        $transfercooling = Component::where('id_posisi', '292')
        ->get();
        return view('maintenance.filling.transfercooling.index', compact('transfercooling'));
    }

    public function cooling1()
    {
        $cooling1 = Component::where('id_posisi', '241')
        ->get();
        return view('maintenance.filling.cooling1.index', compact('cooling1'));
    }

    public function cooling2()
    {
        $cooling2 = Component::where('id_posisi', '242')
        ->get();
        return view('maintenance.filling.cooling2.index', compact('cooling2'));
    }

    public function transferdrying()
    {
        $transferdrying = Component::where('id_posisi', '293')
        ->get();
        return view('maintenance.filling.transferdrying.index', compact('transferdrying'));
    }

    public function drying1()
    {
        $drying1 = Component::where('id_posisi', '251')
        ->get();
        return view('maintenance.filling.drying1.index', compact('drying1'));
    }

    public function drying2()
    {
        $drying2 = Component::where('id_posisi', '252')
        ->get();
        return view('maintenance.filling.drying2.index', compact('drying2'));
    }

    public function transferpembagi()
    {
        $transferpembagi = Component::where('id_posisi', '294')
        ->get();
        return view('maintenance.filling.transferpembagi.index', compact('transferpembagi'));
    }

    public function pembagi()
    {
        $pembagi = Component::where('id_posisi', '261')
        ->get();
        return view('maintenance.filling.pembagi.index', compact('pembagi'));
    }

}
