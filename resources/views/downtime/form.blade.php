@extends('layouts.master')
@section('tittle') Form Downtime @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Form Downtime</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master/form')}}">Form</a></li>
            <li class="active">Form Downtime</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/downtime/create">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="id_posisi">Mesin</label>
                            <select type="text" name="id_posisi" class="form-control text-white select2" id="id_posisi">
                                @foreach ($position as $position)
                                <option value="{{ $position->id }}">{{ $position->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user">PIC</label>
                            <div>
                                <select class="form-control select2" name="user_id" required>
                                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->crew->scope }} - {{ Auth::user()->crew->nama }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="tanggal">Tanggal</label>
                            <div>
                                <input type="date" class="form-control text-white" id="tanggal" name="tanggal" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jam">Jam Mulai</label>
                            <div>
                                <input type="time" class="form-control text-white" id="jam" name="jam" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="durasi">Durasi</label>
                            <div>
                                <input type="text" class="form-control text-white" id="durasi" name="durasi" placeholder="Dalam satuan menit" required>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="keterangan">Keterangan</label>
                            <div>
                                <textarea type="text" class="form-control text-white" id="keterangan" name="keterangan" required></textarea>
                            </div>
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
