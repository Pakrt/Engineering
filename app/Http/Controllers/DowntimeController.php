<?php

namespace App\Http\Controllers;
use App\Position;
use App\Downtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DowntimeController extends Controller
{
    public function index()
    {
        $downtime = Downtime::all();
        return view('downtime.index', compact('downtime'));
    }

    public function form()
    {
        $position = Position::all();
        return view('downtime.form', compact('position'));
    }

    public function create(Request $request)
    {
        Downtime::create($request->all());
        return redirect('/downtime')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $downtime = Downtime::find($id);
        return view('downtime.show', compact('downtime'));
    }

    public function edit($id)
    {
        $position = Position::all();
        $downtime = Downtime::find($id);
        return view('downtime.edit', compact('downtime', 'position'));
    }

    public function update(Request $request, $id)
    {
        $downtime = Downtime::find($id);
        $downtime->update($request->all());
        return redirect('/downtime')->with('status', 'Data berhasil diupdate !!');
    }

    public function destroy($id)
    {
        $downtime = Downtime::find($id);
        $downtime->delete();
        return redirect('/downtime')->with('status', 'Data berhasil dihapus !!');
    }

    public function report()
    {
        // $downtime = DB::table('downtimes')
        //         ->whereMonth('tanggal', now())
        //         ->get();
        $downtime = Downtime::whereMonth('tanggal', now())->get();
        $totalmonth = Downtime::whereMonth('tanggal', now())->sum('durasi');
        $total = Downtime::whereYear('tanggal', now())->sum('durasi');
        return view('downtime.report', compact('downtime', 'total', 'totalmonth'));
    }

}
