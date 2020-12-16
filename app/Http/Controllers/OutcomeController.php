<?php

namespace App\Http\Controllers;

use App\Sparepart;
use App\Outcome;
use App\Crew;
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
        // $this->validate($request, [
        //     // 'id_komponen' => 'unique:components'
        //     'jumlah' >= 'jumlah'
        // ]);
        $outcome->save();

        return redirect('/outcome')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function form()
    {
        $crew = Crew::all();
        $sparepart = Sparepart::all();
        return view('outcome.form', compact('sparepart'), compact('crew'));
    }

    public function show(outcome $outcome)
    {
        //
    }

    public function edit($id)
    {
        $outcome = Outcome::find($id);
        return view('outcome.edit', compact('outcome'));
    }

    public function update(Request $request, $id)
    {
        $outcome = Outcome::find($id);
        $outcome->update($request->all());
        return redirect('/outcome')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $outcome = Outcome::find($id);
        $outcome->delete();

        return redirect('/outcome')->with('status', 'Data berhasil dihapus !!');
    }
}
