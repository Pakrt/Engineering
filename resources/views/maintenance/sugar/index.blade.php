@extends('layouts.master')
@section('tittle') Maintenance Sugar @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Maintenance Sugar Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/maintenance')}}">Maintenance</a></li>
            <li class="active">Sugar</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">DESINFEKTAN</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/sugar/desinfektan') }}"><i class="mdi mdi-water-percent text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">HOT WATER</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/sugar/hotwater') }}"><i class="mdi mdi-water-percent text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">SYRUP</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/sugar/syrup') }}"><i class="mdi mdi-beer text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">STEAM</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/sugar/steam') }}"><i class="mdi mdi-weather-windy text-info"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <h3 class="box-title">WATER</h3>
                    <ul class="list-inline two-part">
                        <li><a href="{{ url('/sugar/water') }}"><i class="mdi mdi-water text-info"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
