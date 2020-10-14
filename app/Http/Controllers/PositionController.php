<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('position.index', ['positions' => $positions]);
    }

    public function create(Request $request)
    {
        // $position = new Position;
        // $position->id_posisi = $request->id_posisi;
        // $position->nama = $request->nama;
        // $position->save();
        // Position::create($request->all());
        $this->validate($request, [
            'id' => 'unique:positions'
        ]);
        Position::create($request->all());

        return redirect('/position')->with('status', 'Data Berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {

    }

    public function show(Position $position)
    {
        //
    }

    public function edit($id)
    {
        $position = Position::find($id);
        return view('position.edit', ['position' => $position]);

    }

    public function update(Request $request, $id)
    {
        $position = Position::find($id);
        $position->update($request->all());

        return redirect('/position')->with('status', 'Data Berhasil di update !!');
    }

    public function destroy($id)
    {
        $position = Position::find($id);
        $position->delete();

        return redirect('/position')->with('status', 'Data Berhasil dihapus !!');
    }
}
