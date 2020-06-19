@extends('layouts.master')
@section('tittle') Maintenance @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Maintenance Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li class="active"><a href="#">Maintenance</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">RUANG GULA</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-link text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/sugar') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">LANTAI 3</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-folder-alt text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/mixing') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">FILLING</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-wrench text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/filling') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">PACKAGING</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-link text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/packaging') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
