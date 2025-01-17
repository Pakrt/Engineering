<?php

namespace App\Http\Controllers;

use App\Crew;
use App\Sparepart;
use App\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $income = Income::all();
        return view('income.index', compact('income'));
    }

    public function create(Request $request)
    {
        Income::create($request->all());

        $income = Sparepart::findOrFail($request->sparepart_id);
        $income->jumlah += $request->jumlah;
        $income->save();

        return redirect('/income')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function form()
    {
        $crew = Crew::all();
        $sparepart = Sparepart::all();
        return view('income.form', compact('sparepart'), compact('crew'));
    }

    public function show(Income $income)
    {
        //
    }

    public function edit($id)
    {
        $income = Income::find($id);
        return view('income.edit', compact('income'));
    }

    public function update(Request $request, $id)
    {
        $income = Income::find($id);
        $income->update($request->all());
        return redirect('/income')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $income = Income::find($id);
        $income->delete();

        return redirect('/income')->with('status', 'Data berhasil dihapus !!');
    }
}
