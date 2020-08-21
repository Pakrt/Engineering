<?php

namespace App\Http\Controllers;
use \App\Downtime;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $day = Carbon::now()->format('d');
        // $month = Carbon::now()->format('m');
        // $year = Carbon::now()->format('Y');

        // Downtime::whereDate($day);
        // Downtime::whereMonth($month);
        // Downtime::whereYear($year);
        // $downtime = Downtime::where('durasi', '<=', 10);
        $downtime = Downtime::all();
        $total = Downtime::where('durasi', '>', 0)->sum('durasi');
        return view('home', compact('downtime', 'total'));
    }

    public function report()
    {
        $downtime = DB::table('downtimes')
                ->whereMonth('created_at', '8')
                ->get();
        // $downtime = Downtime::all();
        $total = Downtime::where('durasi', '>', 0)->sum('durasi');
        return view('report', compact('downtime', 'total'));
    }

    public function master ()
    {
        return view('master.index');
    }
}
