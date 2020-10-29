@extends('layouts.master')
@section('tittle') Form History Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Form History Component</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master/form')}}">Form</a></li>
            <li class="active">Form History</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="/history/create">
            @csrf
            <div class="form-group">
                <label for="id_komponen">ID Komponen</label>
                <select class="form-control select2" name="id_komponen" required>
                    @foreach ($component as $component)
                    <option value="{{ $component->id_komponen }}">{{ $component->id_komponen }} - {{ $component->komponen }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="tanggal" class="control-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required>
            </div>
            <div class="form-group col-md-6">
                <label for="user" class="control-label">PIC</label>
                <input name="user" type="text" class="form-control" id="user" value="{{ Auth::user()->name}}" readonly>
            </div>
            <div class="form-group">
                <label for="keterangan" class="control-label">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="keterangan" required></textarea>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/master/form') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
