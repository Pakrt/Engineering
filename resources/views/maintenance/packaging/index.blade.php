@extends('layouts.master')
@section('tittle') Maintenance Packaging @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Maintenance Packaging Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/maintenance')}}">Maintenance</a></li>
            <li class="active">Packaging</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">PAM A</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/pama') }}"><i class="mdi mdi-houzz text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">PAM B</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/pamb') }}"><i class="mdi mdi-houzz text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">PAM C</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/pamc') }}"><i class="mdi mdi-houzz text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">PAM D</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/pamd') }}"><i class="mdi mdi-houzz text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM A</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/konveyorpama') }}"><i class="mdi mdi-table-column-remove text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM B</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/konveyorpamb') }}"><i class="mdi mdi-table-column-remove text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM C</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/konveyorpamc') }}"><i class="mdi mdi-table-column-remove text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM D</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/konveyorpamd') }}"><i class="mdi mdi-table-column-remove text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">Jelly Boy 1</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/jb1') }}"><i class="mdi mdi-numeric-1-box-multiple-outline text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">Jelly Boy 2</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/jb2') }}"><i class="mdi mdi-numeric-2-box-multiple-outline text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">Carton Erector</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/packaging/karton') }}"><i class="mdi mdi-houzz-box text-info"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
