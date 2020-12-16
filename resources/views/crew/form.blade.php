@extends('layouts.master')
@section('tittle') Master Crew @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white text-white">Master Crew</h4> </div>
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
<div class="col-md-6">
<div class="white-box text-white">
    <div class="row">
        <div class="col-md-12">
            <form action="/crew/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="nama" class="control-label">Nama</label>
                    <input name="nama" type="text" class="form-control text-white" id="nama" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                    <select type="text" name="jenis_kelamin" class="form-control text-white" id="jenis_kelamin" required>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        <option value="Bencong">Lain-lain</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="date" class="form-control text-white" id="tanggal_lahir" required >
                </div>
                <div class="form-group col-md-6">
                    <label>Nomor HP</label>
                    <div class="input-group{{$errors->has('kontak') ? 'has-error' : ''}}">
                        <span class="input-group-addon" id="basic-addon1">+62</span>
                        <input type="text" name="kontak" class="form-control text-white" aria-describedby="basic-addon1" value="{{old('kontak')}}" required>
                            @if ($errors->has('kontak'))
                            <span class="help-block">{{$errors->first('kontak')}}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="scope" class="control-label">Scope</label>
                    <select type="text" name="scope" class="form-control text-white" id="scope" required>
                        <option value="Admin">Admin</option>
                        <option value="Automasi">Automasi</option>
                        <option value="Boiler">Boiler</option>
                        <option value="Filling">Filling</option>
                        <option value="IT">IT</option>
                        <option value="Packaging">Packaging</option>
                        <option value="Support">Support</option>
                        <option value="Utility">Utility</option>
                        <option value="Workshop">Workshop</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="role" class="control-label">Hak Akses</label>
                    <select type="text" name="role" class="form-control text-white" id="role" required>
                        <option value="admin">Administrator</option>
                        <option value="user">User</option>
                        <option value="Lain">Lain-lain</option>
                    </select>
                </div>

                <div class="row col-md-12">
                    <div class="form-group col-md-8{{$errors->has('email') ? 'has-error' : ''}}">
                        <label for="email" class="control-label">Email</label>
                        <input name="email" type="text" class="form-control text-white" id="email" required placeholder="@" value="{{old('email')}}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group col-md-8">
                    <label for="alamat" class="control-label">Alamat</label>
                    <textarea name="alamat" class="form-control text-white" id="alamat" required></textarea>
                </div>

                <div class="modal-footer col-md-12 col-xs-12">
                    <a href="{{ url('/crew')}}" class="btn btn-warning" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                    <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda ingin menyimpan data ini ??')">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
