@extends('layouts.master')
@section('tittle') Master Crew @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Crew Engineering</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active"><a href="#">Master Crew</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="panel">
                        <div class="p-30">
                            <div class="row">
                                <div class="col-xs-4"><img src="/assets/plugins/images/users/varun.jpg" alt="varun" class="img-circle img-responsive"></div>
                                <div class="col-xs-8">
                                    <h2 class="m-b-0">{{ Auth::user()->name }}</h2>
                                    <h4>{{ Auth::user()->role }}</h4>
                                </div>
                            </div>
                            <div class="text-center row m-t-20 col-6">
                                <div class="col-xs-6">
                                    <h2>Email</h2>
                                    <h4>{{ Auth::user()->email }}</h4>
                                </div>
                            </div>
                        </div>
                        <hr class="m-t-10">
                        <div class="p-20 text-center">
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore sert adg</p>
                            <hr>

                        </div>
                        <hr>
                    </div>
                </div>
@endsection
