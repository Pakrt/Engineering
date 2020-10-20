<?php

namespace App\Http\Controllers;

use App\Sparepart;
use App\Category;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SparepartController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('sparepart.index', compact('spareparts'));
    }

    public function create( Request $request)
    {
        $sparepart = Sparepart::create($request->all());
        return redirect('/sparepart')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $sparepart = Sparepart::find($id);
        return view('sparepart.show', compact('sparepart'));
    }

    public function edit($id)
    {
        $sparepart = Sparepart::find($id);
        $units = Unit::all();
        return view('sparepart.edit', compact('units'), compact('sparepart'));
    }

    public function update(Request $request, $id)
    {
        $sparepart = Sparepart::find($id);
        $sparepart->update($request->all());

        return redirect('/sparepart')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $sparepart = Sparepart::find($id);
        $sparepart->delete();

        return redirect('/sparepart')->with('status', 'Data berhsail dihapus !!');
    }

    public function form()
    {
        $categories = Category::all();
        $units = Unit::all();
        return view('sparepart.form', compact('categories'), compact('units'));
    }

    public function alert()
    {
        $spareparts = DB::select('select * from spareparts where jumlah < minimum');
        return view('sparepart.alert', compact('spareparts'));
    }
}
