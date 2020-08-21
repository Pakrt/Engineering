@extends('layouts.master')
@section('tittle') History Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">History Component</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/history')}}">History Component</a></li>
            <li class="active"><a href="#">Edit History Component</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="/history/{{ $history->id }}/update">
            @csrf
            <div class="form-group">
                <label for="id_komponen">ID Komponen</label>
                <div>
                    <input type="text" class="form-control" id="id_komponen" name="id_komponen" value="{{$history->id_komponen}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <div>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$history->tanggal}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <div>
                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" required>{{$history->keterangan}}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/history') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                <button type="submit" class="btn btn-success" onclick="return confirm('Udah selesai update nya ??')">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
