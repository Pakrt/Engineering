@extends('layouts.master')
@section('tittle') Master Position @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Master Position</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active"><a href="#">Master Position</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form action="/position/{{$position->id}}/update" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_posisi" class="control-label">ID Posisi:</label>
                <input name="id" type="text" class="form-control" id="id_posisi" value="{{$position->id}}" required>
            </div>
            <div class="form-group">
                <label for="nama" class="control-label">Nama Posisi</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{$position->nama}}" required>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/position') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Udah selesai update nya ??')">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
