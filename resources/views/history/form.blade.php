@extends('layouts.master')
@section('tittle') Form History Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Form History Component</h4> </div>
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
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/history/create">
                        @csrf
                        <div class="form-group col-md-8">
                            <label for="id_komponen">ID Komponen</label>
                            <select class="form-control text-white select2" name="id_komponen" required>
                                @foreach ($component as $component)
                                <option value="{{ $component->id_komponen }}">{{ $component->id_komponen }} - {{ $component->komponen }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="user" class="control text-white-label">PIC</label>
                            <select class="form-control select2" name="user_id" required>
                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->crew->scope }} - {{ Auth::user()->crew->nama }}</option>
                            </select>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="keterangan" class="control text-white-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control text-white" id="keterangan" required></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal" class="control text-white-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control text-white" id="tanggal" required>
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
