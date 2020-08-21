@extends('layouts.master')
@section('tittle') Dashboard @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Home</a></li>
            <li class="active">Master Page</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Master Component</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-link text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/component') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Master Crew</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-folder-alt text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/crew') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Master Position</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-wrench text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/position') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="white-box">
                    <h3 class="box-title">Master Downtime</h3>
                    <ul class="list-inline two-part">
                        <li><i class="icon-link text-info"></i></li>
                        <li class="text-right"><a href="{{ url('/downtime') }}"><i class="icon ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
