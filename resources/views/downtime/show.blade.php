@extends('layouts.master')
@section('tittle') Master History @endsection
@section('content')
{{-- <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

<style>
    h2{
        font-family: Lucida;
        text-align: center;
    }
    h3{
        font-family: Lucida;
    }
</style>

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Master Downtime</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/downtime') }}">Master Downtime</a></li>
            <li class="active">Detail Downtime</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="panel">
            <div class="white-box">
                <div class="panel panel-default">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-header">
                            <h2>{{$downtime->position->nama}}</h2>
                        </div>
                        <div class="panel-body">
                            <h3>Tanggal</h3>
                            <h4>&emsp;{{$downtime->tanggal}}</h4>
                            <h3>Jam</h3>
                            <h4>&emsp;{{$downtime->jam}}</h4>
                            <h3>Durasi</h3>
                            <h4>&emsp;{{$downtime->durasi}} menit</h4>
                            <h3>PIC</h3>
                            <h4>&emsp;{{$downtime->user->crew->nama}}</h4>
                            <h3>Keterangan</h3>
                            <h4>&emsp;{{$downtime->keterangan}}</h4>
                        </div>
                        <div class="panel-footer">
                            <form action="/downtime/{{ $downtime->id }}/delete" method="POST">
                                @method('delete')
                                @csrf
                                {{-- <a href="/downtime/{{ $downtime->id_komponen }}/detail" class="btn btn-info btn-outline btn-circle btn-lg"><i class="ti-receipt"></i></a> --}}
                                <a href="/downtime/{{ $downtime->id }}/edit" class="btn btn-info btn-outline btn-circle btn-lg"><i class="ti-pencil-alt"></i></a>
                                <button type="submit" class="btn btn-danger btn-outline btn-circle btn-lg" onclick="return confirm('Yakin mau hapus datanya niiih ??')"><i class="ti-trash"></i></button>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
