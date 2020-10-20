<?php

namespace App\Http\Controllers;

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

        return redirect('/income')->with('status', 'Data berhasil Ditambahkan');
    }

    public function form()
    {
        $sparepart = Sparepart::all();
        return view('income.form', compact('sparepart'));
    }

    public function show(Income $income)
    {
        //
    }

    public function edit(Income $income)
    {
        //
    }

    public function update(Request $request, Income $income)
    {
        //
    }

    public function destroy($id)
    {
        $income = Income::find($id);
        $income->delete();

        return redirect('/income')->with('status', 'Data berhasil dihapus !!');
    }
}
