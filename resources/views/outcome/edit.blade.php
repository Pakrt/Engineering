@extends('layouts.master')
@section('tittle') Form Edit Data Barang Keluar @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Form Edit Data Barang Keluar</h4> </div>
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
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/outcome/{{$outcome->id}}/update">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="kode" class="control-label">Kode LBK</label>
                            <input type="text" name="kode" class="form-control text-white" id="kode" required value="{{$outcome->kode}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggal" class="control-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control text-white" id="tanggal" required value="{{$outcome->tanggal}}">
                        </div>

                        <div class="form-group col-md-8">
                            <label class="control-label">Nama Sparepart</label>
                            <select class="form-control select2" name="sparepart_id" required disabled>
                                <option value="{{ $outcome->sparepart_id }}">{{ $outcome->sparepart->category->kode }} - {{ $outcome->sparepart->nama }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jumlah" class="control-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" required value="{{$outcome->jumlah}}" disabled>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <textarea class="form-control text-white" name="keterangan" id="keterangan">{{$outcome->keterangan}}</textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="user_id" class="control-label">User</label>
                            <select class="form-control select2" name="user_id" required>
                                <option value="{{ $outcome->user_id }}">{{ $outcome->user->crew->scope }} - {{ $outcome->user->name }}</option>
                                @foreach ($crew as $crew)
                                <option value="{{ $crew->user->id }}">{{ $crew->scope }} - {{ $crew->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer col-md-12">
                            <a href="{{ url('/outcome') }}" class="btn btn-warning" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
