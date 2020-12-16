@extends('layouts.master')
@section('tittle') Maintenance @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Maintenance Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        {{-- <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> --> --}}
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}" >Dashboard</a></li>
            <li class="active">Maintenance</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/sugar') }}">
                        <h3 class="box-title">RUANG GULA</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-drop text-info"></i></li>
                            <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/mixing') }}">
                        <h3 class="box-title">MIXING</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-refresh text-info"></i></li>
                            <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/filling') }}">
                        <h3 class="box-title">FILLING</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-briefcase text-info"></i></li>
                            <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <a href="{{ url('/packaging') }}">
                        <h3 class="box-title">PACKAGING</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-social-dropbox text-info"></i></li>
                            <li class="text-right"><i class="icon ti-arrow-right"></i></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
