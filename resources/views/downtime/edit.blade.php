@extends('layouts.master')
@section('tittle') Form Downtime @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Form Downtime</h4> </div>
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
        <div class="white-box texy-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/downtime/{{ $downtime->id }}/update">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="id_posisi">Mesin</label>
                            <select type="text" name="id_posisi" class="select2 form-control text-white" id="id_posisi">
                                <option value="{{ $downtime->id_posisi }}">{{ $downtime->position->nama }}</option>
                                @foreach ($position as $position)
                                <option value="{{ $position->id }}">{{ $position->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user">PIC</label>
                            <select class="form-control select2" name="user_id" required disabled>
                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->crew->scope }} - {{ Auth::user()->crew->nama }}</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control text-white" id="tanggal" name="tanggal" value="{{ $downtime->tanggal }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jam">Jam Mulai</label>
                            <input type="time" class="form-control text-white" id="jam" name="jam" value="{{ $downtime->jam }}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="durasi">Durasi</label>
                            <input type="text" class="form-control text-white" id="durasi" name="durasi" value="{{ $downtime->durasi }}" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="keterangan">Keterangan</label>
                            <textarea type="text" class="form-control text-white" id="keterangan" name="keterangan" required>{{ $downtime->keterangan }}</textarea>
                        </div>
                        <div class="modal-footer col-md-12">
                            <a href="{{ url('/downtime') }}" class="btn btn-warning" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
