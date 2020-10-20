<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $unit = Unit::all();
        return view('unit.index', compact('unit'));
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'kode' => 'unique:categories'
        ]);
        Unit::create($request->all());
        return redirect('/unit')->with('status', 'Data berhasil ditambahkan');
    }
    public function store(Request $request)
    {
        //
    }
    public function show(unit $unit)
    {
        //
    }
    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('unit.edit', compact('unit'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode' => 'unique:categories'
        ]);
        $unit = Unit::find($id);
        $unit->update($request->all());
        return redirect('/unit')->with('status', 'Data berhasil di update !!');
    }
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return redirect('/unit');
    }
}
