@extends('layouts.master')
@section('tittle') Maintenance Sugar @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Starter Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/maintenance')}}">Maintenance</a></li>
            <li class="active"><a href="#">Sugar</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">DESINFEKTAN</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-water-percent text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/sugar/desinfektan') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">HOT WATER</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-water-percent text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/sugar/hotwater') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">SYRUP</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-beer text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/sugar/syrup') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">STEAM</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-weather-windy text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/sugar/steam') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">WATER</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-water text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/sugar/water') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
