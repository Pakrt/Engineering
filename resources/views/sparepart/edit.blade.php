@extends('layouts.master')
@section('tittle') Form Edit Sparepart @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Form Edit Sparepart</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master')}}">Master</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/sparepart')}}">Master Sparepart</a></li>
            <li class="active">Form Edit Sparepart</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="/sparepart/{{$sparepart->id}}/update" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-white col-md-6">
                <label class="control-label">Kategori</label>
                <select class="form-control text-white select2" name="category_id">
                    <option value="{{ $sparepart->category->id }}">{{ $sparepart->category->kode }} - {{ $sparepart->category->nama }}</option>
                    @foreach(App\Category::get() as $category)
                    <option value="{{ $category->id }}">{{ $category->kode }} - {{ $category->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group text-white col-md-6">
                <label class="control-label">Satuan</label>
                <select class="form-control text-white select2" name="unit_id" required>
                    <option value="{{ $sparepart->unit->id }}">{{ $sparepart->unit->kode }} - {{ $sparepart->unit->nama }}</option>
                    @foreach ($units as $units)
                    <option value="{{ $units->id }}">{{ $units->kode }} - {{ $units->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group text-white col-md-8">
                <label for="nama" class="control-label">Nama Sparepart</label>
                <input name="nama" type="text" class="form-control text-white" id="nama" value="{{$sparepart->nama}}" required>
            </div>
            <div class="form-group text-white col-md-4">
                <label for="minimum" class="control-label">Minimal Stok</label>
                <input type="number" name="minimum" class="form-control text-white" id="minimum" value="{{$sparepart->minimum}}">
            </div>

            <div class="form-group text-white col-md-8">
                <label for="spesifikasi" class="control-label">Spesifikasi</label>
                <textarea name="spesifikasi" class="form-control text-white" id="spesifikasi">{{$sparepart->spesifikasi}}</textarea>
            </div>
            <div class="form-group text-white col-md-4">
                <label for="gambar" class="control-label">Gambar</label>
                <input type="file" name="gambar" class="form-control text-white" id="gambar">
            </div>

            <div class="modal-footer col-md-12">
                <a href="{{ url('/sparepart') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
