@extends('layouts.master')
@section('tittle') Maintenance Packaging @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Maintenance Packaging Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/maintenance')}}">Maintenance</a></li>
            <li class="active"><a href="#">Packaging</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">PAM A</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-houzz text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/pama') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">PAM B</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-houzz text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/pamb') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">PAM C</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-houzz text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/pamc') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">PAM D</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-houzz text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/pamd') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Carton Erector</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-houzz-box text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/karton') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM A</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/konveyorpama') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM B</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/konveyorpamb') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM C</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/konveyorpamc') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor PAM D</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/konveyorpamd') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Jelly Boi 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-1-box-multiple-outline text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/jb1') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Jelly Boi 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-2-box-multiple-outline text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging/jb2') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
