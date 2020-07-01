<?php

namespace App\Http\Controllers;

use App\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crew = Crew::all();
        return view('crew.index', compact('crew'));
    }

    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role = $request->role;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('engineering');
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $crew = Crew::create($request->all());
        return redirect('/crew')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $crew = Crew::find($id);
        return view('crew.show', compact('crew'));
    }

    public function edit(Crew $crew)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $crew = Crew::find($id);
        $crew->delete();
        return redirect('/crew')->with('status', 'Data berhasil dihapus !!');
    }
}
