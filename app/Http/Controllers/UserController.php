<?php

namespace App\Http\Controllers;
use App\User;
use App\Crew;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        if($request->hasFile('avatar'))
        {
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save();
        }
        $i = $user->crew->id;
        $crew = Crew::find($i);
        $crew->update($request->all());

        return redirect("/user/$id/detail")->with('status', ' Data berhasil diupdate !!');
    }

    public function destroy($id)
    {
        //
    }
}
