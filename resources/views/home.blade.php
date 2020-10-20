@extends('layouts.master')
@section('tittle') Dashboard @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/maintenance') }}">
                        <h3 class="box-title">Maintenance</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-wrench text-info"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/master') }}">
                        <h3 class="box-title">Master</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-folder-alt text-info"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/downtime/form') }}">
                        <h3 class="box-title">Form Downtime</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-note text-info"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/history/form') }}">
                        <h3 class="box-title">Form History</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-note text-info"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            @if (auth()->user()->role == 'Admin')
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/outcome/form') }}">
                        <h3 class="box-title">Form Barang Keluar</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-note text-info"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="white-box">
                    <a href="{{ url('/income/form') }}">
                        <h3 class="box-title">Form Barang Masuk</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-note text-info"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            @endif
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="white-box">
                    <a href="{{ url('/report') }}">
                        <h1 class="text-center" style="color:cornflowerblue">Downtime Report</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
