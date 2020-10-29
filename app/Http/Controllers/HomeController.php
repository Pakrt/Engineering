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
        return view('home');
    }

    public function master ()
    {
        return view('master.index');
    }

    public function form ()
    {
        return view('master.mform');
    }

    public function mutasi ()
    {
        return view('master.mmutasi');
    }
}
