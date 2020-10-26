@extends('layouts.master')
@section('tittle') Form Edit Data Barang Masuk @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Form Edit Data Barang Masuk</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/income')}}">Barang Masuk</a></li>
            <li class="active">Edit Data Barang Masuk</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="/income/{{$income->id}}/update">
            @csrf
            <div class="form-group">
                <label for="kode" class="control-label">Kode LBK</label>
                <input type="text" name="kode" class="form-control" id="kode" required value="{{$income->kode}}">
            </div>
            <div class="form-group">
                <label class="control-label">Nama Sparepart</label>
                <select class="form-control select2" name="sparepart_id" required disabled>
                    <option value="{{$income->sparepart_id }}">{{ $income->sparepart->category->kode }} - {{ $income->sparepart->nama }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah" class="control-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah" required value="{{$income->jumlah}}" disabled>
            </div>
            <div class="form-group">
                <label for="keterangan" class="control-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan">{{$income->keterangan}}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal" class="control-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required value="{{$income->tanggal}}">
            </div>
            <div class="form-group" hidden>
                <label for="user" class="control-label">User</label>
                <input type="text" name="user_id" class="form-control" id="user_id" value="{{Auth::user()->id}}">
            </div>
            <div class="modal-footer">
                <a href="{{ url('/income') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
