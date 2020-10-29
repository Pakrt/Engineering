@extends('layouts.master')
@section('tittle') Form @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Form Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active">Form</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            @if (auth()->user()->role == 'Admin')
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/outcome/form') }}">
                    <h3 class="box-title">Form Barang Keluar</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-package-up text-info"></i></li>
                        <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/income/form') }}">
                    <h3 class="box-title">Form Barang Masuk</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-package-down text-info"></i></li>
                        <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
            @endif
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/history/form') }}">
                    <h3 class="box-title">Form Component History</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-file-multiple text-info"></i></li>
                        <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/downtime/form') }}">
                    <h3 class="box-title">Form Downtime</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-history text-info"></i></li>
                        <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
            @if (auth()->user()->role == 'Admin')
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/sparepart/form') }}">
                    <h3 class="box-title">Form Sparepart</h3>
                    <ul class="list-inline two-part">
                        <li><i class="mdi mdi-bug text-info"></i></li>
                        <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
