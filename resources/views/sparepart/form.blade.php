@extends('layouts.master')
@section('tittle') Form Tambah Sparepart @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Form Tambah Sparepart</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master/form')}}">Form</a></li>
            <li class="active">Form Sparepart</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/sparepart/create" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-6">
                            <label class="control-label">Kategori</label>
                            <select class="form-control text-white select2" name="category_id" required>
                                @foreach ($categories as $categories)
                                <option value="{{ $categories->id }}">{{ $categories->kode }} - {{ $categories->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Satuan</label>
                            <select class="form-control text-white select2" name="unit_id" required>
                                @foreach ($units as $units)
                                <option value="{{ $units->id }}">{{ $units->kode }} - {{ $units->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="nama" class="control-label">Nama Sparepart</label>
                            <input name="nama" type="text" class="form-control text-white" id="nama" value="{{old('nama')}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="minimum" class="control-label">Minimal Stok</label>
                            <input type="number" name="minimum" class="form-control text-white" id="minimum">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="spesifikasi" class="control-label">Spesifikasi</label>
                            <textarea name="spesifikasi" class="form-control text-white" id="spesifikasi"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="gambar" class="control-label">Gambar</label>
                            <input name="gambar" type="file" class="form-control text-white" id="gambar">
                        </div>

                        <div class="form-group" hidden>
                            <label for="jumlah" class="control-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control text-white" id="jumlah" value="0">
                        </div>
                        <div class="modal-footer col-md-12">
                            <a href="{{ url('/master/form') }}" class="btn btn-warning" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
