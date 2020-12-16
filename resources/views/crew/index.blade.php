@extends('layouts.master')
@section('tittle') Master Crew @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Crew Engineering</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master') }}">Master</a></li>
            <li class="active">Master Crew</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="panel">
            @if (auth()->user()->role == 'admin')
            <div class="panel-heading">
                {{-- <button type="button" class="btn btn-info btn-outline" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i></button> --}}
                <a href="{{ url('/crew/form')}}" class="btn btn-info btn-outline">Tambah Data</a>
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            @endif
            <div class="white-box">
                <div class="row el-element-overlay m-b-40">
                    @foreach ($crew as $crew)
                    <!-- /.usercard -->
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{ $crew->user->getAvatar() }}" style="height: 250px" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{ $crew->user->getAvatar() }}"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="/crew/{{ $crew->id }}/detail"><i class="icon-user"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{ $crew->nama}}</h3> <small>{{$crew->scope}} Engineer</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.usercard-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel1">Masukkan Data Baru</h4> </div>
                <div class="modal-body">
                    <form action="/crew/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="role" class="control-label">Role</label>
                            <select type="text" name="role" class="form-control" id="role">
                                <option value="Admin">Admin</option>
                                <option value="Crew">Crew</option>
                                <option value="Lain">Lain-lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="scope" class="control-label">Scope</label>
                            <select type="text" name="scope" class="form-control" id="scope">
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
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="control-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                            <select type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                <option value="Bencong">Lain-lain</option>
                            </select>
                        </div>
                        <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="email" class="control-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="@" value="{{old('email')}}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('kontak') ? 'has-error' : ''}}">
                            <label for="kontak" class="control-label">No. HP/Whatsapp</label>
                            <span class="help-block"><small>Tambahkan kode negara (62)</small></span>
                            <input name="kontak" type="text" class="form-control" id="kontak" required value="62">
                            @if ($errors->has('email'))
                                <span class="help-block">{{$errors->first('kontak')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
