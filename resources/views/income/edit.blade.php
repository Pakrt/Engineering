@extends('layouts.master')
@section('tittle') Form Edit Data Barang Masuk @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Form Edit Data Barang Masuk</h4> </div>
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
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/income/{{$income->id}}/update">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="kode" class="control-label">Kode LBM</label>
                            <input type="text" name="kode" class="form-control text-white" id="kode" required value="{{$income->kode}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggal" class="control-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control text-white" id="tanggal" required value="{{$income->tanggal}}">
                        </div>

                        <div class="form-group col-md-8">
                            <label class="control-label">Nama Sparepart</label>
                            <select class="form-control select2" name="sparepart_id" required disabled>
                                <option value="{{ $income->sparepart_id }}">{{ $income->sparepart->category->kode }} - {{ $income->sparepart->nama }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jumlah" class="control-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" required value="{{$income->jumlah}}" disabled>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <textarea class="form-control text-white" name="keterangan" id="keterangan">{{$income->keterangan}}</textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="user_id" class="control-label">User</label>
                            <select class="form-control select2" name="user_id" required>
                                <option value="{{ $income->user_id }}">{{ $income->user->crew->scope }} - {{ $income->user->name }}</option>
                            </select>
                        </div>
                        <div class="modal-footer col-md-12">
                            <a href="{{ url('/income') }}" class="btn btn-warning" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
