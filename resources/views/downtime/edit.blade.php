@extends('layouts.master')
@section('tittle') Form Downtime @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Form Downtime</h4> </div>
    <div class="col-lg-12 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/downtime')}}">Master Downtime</a></li>
            <li class="active"><a href="#">Edit Downtime</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="/downtime/{{ $downtime->id }}/update">
            @csrf
            <div class="form-group">
                <label for="id_posisi">Mesin</label>
                <select type="text" name="id_posisi" class="form-control id="id_posisi">
                    @foreach ($position as $position)
                    <option value="{{ $position->nama }}">{{ $position->nama }}</option>
                    @endforeach
                </select>
                <span><small>{{ $downtime->id_posisi }}</small></span>
            </div>
            <div class="form-group">
                <label for="durasi">Durasi</label>
                <div>
                    <input type="text" class="form-control" id="durasi" name="durasi" value="{{ $downtime->durasi }}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <div>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $downtime->tanggal }}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="jam">Jam Mulai</label>
                <div>
                    <input type="time" class="form-control" id="jam" name="jam" value="{{ $downtime->jam }}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="user">PIC</label>
                <div>
                    <input type="text" class="form-control" id="user" name="user" value="{{ Auth::user()->name }}"" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <div>
                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" required>{{ $downtime->keterangan }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/downtime') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
