<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::all();
        return view('history.index', compact('history'));
    }

    public function create(Request $request)
    {
        \App\History::create($request->all());
        return redirect('/history')->with('status', 'Data berhasil ditambahkan');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id_komponen)
    {
        $komponen = \App\History::where('id_komponen', $id_komponen)
        ->get();
        return view('history.show', compact('komponen'));
    }

    public function edit($id)
    {
        $history = \App\History::find($id);
        return view('history.edit', compact('history'));
    }

    public function update(Request $request, $id)
    {
        $history = \App\History::find($id);
        $history->update($request->all());
        return redirect('/history')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $history = \App\History::find($id);
        $history->delete();
        return redirect('/history')->with('status', 'Data berhasil dihapus !!');
    }
}
