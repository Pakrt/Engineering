@extends('layouts.master')
@section('tittle') Master Crew @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Crew Engineering</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
            <ol class="breadcrumb">
                <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
                <li class="active"><a href="#">Master Crew</a></li>
            </ol>
        </div>
    <!-- /.col-lg-12 -->
</div>
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Change Password</div>
        <div class="panel-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="/password/update">
            @csrf
            @method('put')
                <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                    <label for="current_password" class="col-md-4 control-label">Password Lama</label>
                    <div class="col-md-6">
                        <input id="current_password" type="password" class="form-control" name="current_password" autofocus>
                        <span class="help-block">{{ $errors->first('current_password') }}</span>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password Baru</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password_confirmation" class="col-md-4 control-label">Konfirmasi Password Baru</label>
                    <div class="col-md-6">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <a href="/home" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-success">Ganti Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
