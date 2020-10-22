<?php

namespace App\Http\Controllers;

use App\Component;
use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::all();
        $component = Component::all();
        return view('history.index', compact('history', 'component'));
    }

    public function create(Request $request)
    {
        History::create($request->all());
        return redirect('/history')->with('status', 'Data berhasil ditambahkan');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id_komponen)
    {
        $komponen = History::where('id_komponen', $id_komponen)
        ->get();
        $data = $id_komponen;
        return view('history.show', compact('komponen', 'data'));
    }

    public function rinci($id)
    {
        $history = History::find($id);
        return view('history.detail', compact('history'));
    }

    public function edit($id)
    {
        $history = History::find($id);
        return view('history.edit', compact('history'));
    }

    public function update(Request $request, $id)
    {
        $history = History::find($id);
        $history->update($request->all());
        return redirect('/history')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $history = History::find($id);
        $history->delete();
        return redirect('/history')->with('status', 'Data berhasil dihapus !!');
    }

    public function form()
    {
        $component = Component::all();
        return view('history.form', compact('component'));
    }
}
