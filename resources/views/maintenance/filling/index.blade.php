@extends('layouts.master')
@section('tittle') Maintenance Filling @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Maintenance Filling Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/maintenance')}}">Maintenance</a></li>
            <li class="active">Filling</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/gf1') }}">
                    <h3 class="box-title">GF 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-1-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/gf2') }}">
                    <h3 class="box-title">GF 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-2-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/gf3') }}">
                    <h3 class="box-title">GF 3</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-3-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/gf4') }}">
                    <h3 class="box-title">GF 4</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-4-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/gf5') }}">
                    <h3 class="box-title">GF 5</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-5-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/pasteur') }}">
                    <h3 class="box-title">Pasteur</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-page-layout-body text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/cooling1') }}">
                    <h3 class="box-title">Cooling 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-tablet text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/cooling2') }}">
                    <h3 class="box-title">Cooling 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-tablet text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/drying1') }}">
                    <h3 class="box-title">Drying 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-fan text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/drying2') }}">
                    <h3 class="box-title">Drying 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-fan text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/konveyorfilling') }}">
                    <h3 class="box-title">Conv. Filling</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-row-remove text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/transferpasteur') }}">
                    <h3 class="box-title">Tf Pasteur</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/transfercooling') }}">
                    <h3 class="box-title">Tf Cooling</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/transferpembagi') }}">
                    <h3 class="box-title">Tf Pembagi</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/transferdrying') }}">
                    <h3 class="box-title">Tf Drying</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/pembagi') }}">
                    <h3 class="box-title">Pembagi</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-sign-caution text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/water') }}">
                    <h3 class="box-title">Water Supply</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-water text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/filling/steam') }}">
                    <h3 class="box-title">Steam Supply</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-weather-windy text-info"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
