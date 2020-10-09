@extends('layouts.master')
@section('tittle') Maintenance Mixing @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Maintenance Mixing Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/maintenance')}}">Maintenance</a></li>
            <li class="active">Mixing</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/the') }}">
                    <h3 class="box-title">THE</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-weather-windy text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/powder1') }}">
                    <h3 class="box-title">Powder 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-basket-fill text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/powder2') }}">
                    <h3 class="box-title">Powder 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-basket-fill text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/acid') }}">
                    <h3 class="box-title">Acid</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-flask text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/supply') }}">
                    <h3 class="box-title">Supply</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-barrel text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/mixing1') }}">
                    <h3 class="box-title">Mixing 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-1-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/mixing2') }}">
                    <h3 class="box-title">Mixing 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-2-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/mixing3') }}">
                    <h3 class="box-title">Mixing 3</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-3-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/mixing4') }}">
                    <h3 class="box-title">Mixing 4</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-4-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/mixing5') }}">
                    <h3 class="box-title">Mixing 5</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-5-box-multiple-outline text-info"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/mixing/ndc') }}">
                    <h3 class="box-title">Nata de Coco</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-cube-send text-info"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
