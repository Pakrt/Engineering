<?php

namespace App\Http\Controllers;

use App\Sparepart;
use App\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    public function index()
    {
        $outcome = Outcome::all();
        return view('outcome.index', compact('outcome'));
    }

    public function create(Request $request)
    {
        Outcome::create($request->all());

        $outcome = Sparepart::findOrFail($request->sparepart_id);
        $outcome->jumlah -= $request->jumlah;
        $outcome->save();

        return redirect('/outcome')->with('status', 'Data berhasil Ditambahkan');
    }

    public function form()
    {
        $sparepart = Sparepart::all();
        return view('outcome.form', compact('sparepart'));
    }

    public function show(outcome $outcome)
    {
        //
    }

    public function edit(outcome $outcome)
    {
        //
    }

    public function update(Request $request, outcome $outcome)
    {
        //
    }

    public function destroy($id)
    {
        $outcome = Outcome::find($id);
        $outcome->delete();

        return redirect('/outcome')->with('status', 'Data berhasil dihapus !!');
    }
}
