@extends('layouts.master')
@section('tittle') Form Edit Data Barang Keluar @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Form Edit Data Barang Keluar</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/outcome')}}">Barang Keluar</a></li>
            <li class="active">Edit Data Barang Keluar</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="/outcome/{{$outcome->id}}/update">
            @csrf
            <div class="form-group">
                <label for="kode" class="control-label">Kode LBK</label>
                <input type="text" name="kode" class="form-control" id="kode" required value="{{$outcome->kode}}">
            </div>
            <div class="form-group">
                <label class="control-label">Nama Sparepart</label>
                <select class="form-control select2" name="sparepart_id" required disabled>
                    <option value="{{ $outcome->sparepart_id }}">{{ $outcome->sparepart->category->kode }} - {{ $outcome->sparepart->nama }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah" class="control-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah" required value="{{$outcome->jumlah}}" disabled>
            </div>
            <div class="form-group">
                <label for="keterangan" class="control-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan">{{$outcome->keterangan}}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal" class="control-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required value="{{$outcome->tanggal}}">
            </div>
            <div class="form-group" hidden>
                <label for="user" class="control-label">User</label>
                <input type="text" name="user_id" class="form-control" id="user_id" value="{{Auth::user()->id}}">
            </div>
            <div class="modal-footer">
                <a href="{{ url('/outcome') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
