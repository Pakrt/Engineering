@extends('layouts.master')
@section('tittle') Master Crew @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Master Crew</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        {{-- <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> --> --}}
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/crew') }}">Master Crew</a></li>
            <li class="active">Edit Crew</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <form action="/crew/{{ $crew->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-group">
                <label for="role" class="control-label">Role</label>
                <select type="text" name="role" class="form-control" id="role" disabled>
                    <option value="Admin">Admin</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Lain">Lain-lain</option>
                </select>
            </div> --}}
            <div class="form-group">
                <label for="nama" class="control-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" required value="{{ $crew->nama}}">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required value="{{ $crew->tanggal_lahir}}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                <select type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="Pria" @if($crew->jenis_kelamin=='Pria') selected @endif>Pria</option>
                    <option value="Wanita" @if($crew->jenis_kelamin=='Wanita') selected @endif>Wanita</option>
                    <option value="Bencong" @if($crew->jenis_kelamin=='Bencong') selected @endif>Lain-lain</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="@" required>
            </div> --}}
            <div class="form-group">
                <label for="kontak" class="control-label">No. HP/Whatsapp</label>
                <span class="help-block"><small>Tambahkan kode negara (62)</small></span>
                <input name="kontak" type="text" class="form-control" id="kontak" required value="{{ $crew->kontak}}">
            </div>
            <div class="form-group">
                <label for="alamat" class="control-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" required>{{ $crew->alamat}}</textarea>
            </div>
            {{-- <div class="form-group">
                <label for="scope" class="control-label">Scope</label>
                <select type="text" name="scope" class="form-control" id="scope" disabled>
                    <option value="Admin">Admin</option>
                    <option value="Automasi">Automasi</option>
                    <option value="Boiler">Boiler</option>
                    <option value="Filling">Filling</option>
                    <option value="Packaging">Packaging</option>
                    <option value="Support">Support</option>
                    <option value="Utility">Utility</option>
                    <option value="Workshop">Workshop</option>
                </select>
            </div> --}}
            <div class="modal-footer">
                <a href="/crew/{{ $crew->id }}/detail" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
        </div>
    </form>
</div>
@endsection
