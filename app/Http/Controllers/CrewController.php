<?php

namespace App\Http\Controllers;
use App\User;
use App\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function index()
    {
        $crew = Crew::all();
        return view('crew.index', compact('crew'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'email' => 'unique:users',
            'kontak' => 'unique:crews'
        ]);
        $user = new \App\User;
        $user->role = $request->role;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $crew = Crew::create($request->all());
        return redirect('/crew')->with('status', 'Data user berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        // $crew = User::find($id)->crew;
        $crew = Crew::find($id);
        return view('crew.show', compact('crew'));
    }

    public function edit($id)
    {
        $crew = Crew::find($id);
        return view('crew.edit', compact('crew'));
    }

    public function update(Request $request, $id)
    {
        $crew = Crew::find($id);
        $crew->update($request->all());
        if($request->hasFile('avatar'))
        {
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $crew->avatar = $request->file('avatar')->getClientOriginalName();
            $crew->save();
        }
        return redirect('/home')->with('status', ' Data berhasil diupdate !!');
    }

    public function destroy($id)
    {
        $crew = Crew::find($id);
        $user = User::find($crew->user_id);
        $crew->delete();
        $user->delete();
        return redirect('/crew')->with('status', 'Data berhasil dihapus !!');
    }
}
