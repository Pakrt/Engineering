@extends('layouts.master')
@section('tittle') Maintenance Filling @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Maintenance Filling Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/maintenance')}}">Maintenance</a></li>
            <li class="active"><a href="#">Filling</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">GF 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-1-box-multiple-outline text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/gf1') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">GF 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-2-box-multiple-outline text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/gf2') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">GF 3</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-3-box-multiple-outline text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/gf3') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">GF 4</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-4-box-multiple-outline text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/gf4') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">GF 5</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-numeric-5-box-multiple-outline text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/gf5') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Conveyor Filling</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-row-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/konveyorfilling') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Tf Pasteur</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/transferpasteur') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Pasteur</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-page-layout-body text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/pasteur') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Tf Cooling</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/transfercooling') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Cooling 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-tablet text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/cooling1') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Cooling 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-tablet text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/cooling2') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Tf Drying</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/transferdrying') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Drying 1</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-fan text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/drying1') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Drying 2</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-fan text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/drying2') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Tf Pembagi</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-table-column-remove text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/transferpembagi') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Pembagi</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-sign-caution text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling/pembagi') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
