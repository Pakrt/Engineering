@extends('layouts.master')
@section('tittle') Master Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Master Component</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home')}}">Dashboard</a></li>
            <li><a href="{{ url('/component')}}">Master Component</a></li>
            <li class="active"><a href="#">Edit Component</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="/component/{{ $component->id }}/update">
            @csrf
            <div class="form-group">
                <label class="col-md-12" for="id_komponen">Masukkan ID Komponen</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="id_komponen" name="id_komponen" value="{{$component->id_komponen}}" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12" for="komponen">Masukkan Nama Komponen</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="komponen" name="komponen" value="{{$component->komponen}}" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12" for="id_posisi">Masukkan ID Posisi</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="id_posisi" name="id_posisi" value="{{$component->id_posisi}}" required>
                </div>
            </div>
            <a href="{{ url('/component') }}" class="btn btn-warning" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
            <button type="submit" class="btn btn-primary" onclick="return confirm('Udah selesai update nya ??')">Update Data</button>
        </form>
    </div>
</div>
@endsection
