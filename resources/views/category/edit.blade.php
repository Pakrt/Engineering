@extends('layouts.master')
@section('tittle') Master Category @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Master Category</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/category') }}">Master Category</a></li>
            <li class="active">Edit Category</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form action="/category/{{$category->id}}/update" method="POST">
                        @csrf
                        <div class="form-group col-md-4">
                            <label for="kode" class="control-label">Kode</label>
                            <input name="kode" type="text" class="form-control text-white" id="kode" value="{{$category->kode}}">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="nama" class="control-label">Nama Kategori</label>
                            <input type="text" name="nama" class="form-control text-white" id="nama" value="{{$category->nama}}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <textarea type="text" name="keterangan" class="form-control text-white" id="keterangan">{{$category->keterangan}}</textarea>
                        </div>
                        <div class="modal-footer col-md-12">
                            <a href="{{ url('/category') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Udah selesai update nya ??')">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
