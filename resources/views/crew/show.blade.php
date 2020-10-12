@extends('layouts.master')
<style>
    .col-md-8 .btn {
        position: absolute;
    top: 90%;
    left: ;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: transparent;
    color: white;
    font-size: 20px;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
    }

    .col-md-8 .btn:hover{
        background-color: rgb(103, 155, 253);
    }
</style>
@section('tittle') Master Crew @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Crew Engineering</h4> </div>
    <div class="col-lg-9 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/crew') }}">Master Crew</a></li>
            <li class="active">Detail Crew</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="col-md-8 col-sm-12 col-lg-8">
    <div class="panel">
        <div class="p-30">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <img src="{{ $crew->user->getAvatar() }}" style="vertical-align: middle; width:200px; height:200px; border-radius:50%">
                    {{-- <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn">
                        <i class="fa fa-pencil"></i>
                    </button> --}}
                </div>
                <div class="col-xs-12">
                    <h3 class="m-b-0">&emsp;{{ $crew->nama }}</h3>
                    {{-- <a href="/crew/{{ $crew->id }}/edit" class="btn btn-lg pull-right" style="background-color: transparent; color:white"><i class="ti-pencil"></i></a> --}}
                    {{-- <h4>&emsp; {{ $crew->user->role }} Engineering</h4> --}}
                </div>
            </div>
            <hr class="m-t-10">
            <div class="text-center row m-t-20 col-12">
                <div class="col-md-4 col-xs-6">
                    <h4>Scope</h4>
                    <p>{{ $crew->scope }}</p>
                </div>
                <div class="col-md-4 col-xs-6">
                    <h4>Jenis Kelamin</h4>
                    <p>{{ $crew->jenis_kelamin }}</p>
                </div>
                <div class="col-md-4 col-xs-6">
                    <h4>Tanggal Lahir</h4>
                    <p>{{ $crew->tanggal_lahir }}</p>
                </div>
                <div class="col-md-4 col-xs-6">
                    <h4>Alamat</h4>
                    <p>{{ $crew->alamat }}</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <h4>Kontak</h4>
                    <a href="https://wa.me/{{$crew->kontak}}" target="_blank"><i class="mdi mdi-whatsapp"></i> {{$crew->kontak}}</a>
                </div>
                <div class="col-md-4 col-xs-12">
                    <h4>Email</h4>
                    <p>{{ $crew->user->email }}</p>
                </div>
            </div>
            <hr class="m-t-10">
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel1">Upload Avatar Baru</h4>
            </div>
            <div class="modal-body">
                <form action="/user/{{ Auth::user()->id }}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="avatar" class="control-label">Avatar</label>
                        <input name="avatar" type="file" class="form-control" id="avatar">
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
