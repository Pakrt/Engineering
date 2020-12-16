@extends('layouts.master')
@section('tittle') History Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">History Component</h4> </div>
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
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/history/{{ $history->id }}/update">
                        @csrf
                        <div class="form-group col-md-8">
                            <label for="id_komponen">ID Komponen</label>
                            <select class="form-control select2" name="id_komponen" required disabled>
                                <option value="{{ $history->id_komponen }}">{{ $history->id_komponen }} - {{ $history->component->komponen }}</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="user_id">PIC</label>
                            <select class="form-control select2" name="user_id" required disabled>
                                <option value="{{ $history->user->id }}">{{ $history->user->crew->scope }} - {{ $history->user->crew->nama }}</option>
                            </select>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="keterangan">Keterangan</label>
                            <textarea type="text" class="form-control text-white" id="keterangan" name="keterangan" required>{{$history->keterangan}}</textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control text-white" id="tanggal" name="tanggal" value="{{$history->tanggal}}" required>
                        </div>

                        <div class="modal-footer col-md-12">
                            <a href="{{ url('/history') }}" class="btn btn-warning" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Udah selesai update nya ??')">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
