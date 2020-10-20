@extends('layouts.master')
@section('tittle') Master Sparepart @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Detail Sparepart</h4> </div>
    <div class="col-lg-9 col-sm-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master') }}">Master</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/sparepart') }}">Master Sparepart</a></li>
            <li class="active">Detail Sparepart</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="white-box">
            <div class="user-bg text-center">
                <a href="/images/nouser.jpg" target="_blank">
                    <img width="auto" height="auto" alt="sparepart" src="/images/nouser.jpg">
                </a>
            </div>
            <div class="user-btm-box">
                <div class="row text-center m-t-10">
                    <div class="col-md-6 b-r"><strong>Nama</strong>
                        <h3>{{$sparepart->nama}}</h3>
                    </div>
                    <div class="col-md-6"><strong>Kategori</strong>
                        <h3>{{$sparepart->category->kode}}</h3>
                    </div>
                </div>
                <hr>
                <div class="row text-center m-t-10">
                    <div class="col-md-6 b-r"><strong>Spesifikasi</strong>
                        <h3>{{$sparepart->spesifikasi}}</h3>
                    </div>
                    <div class="col-md-6"><strong>Keterangan</strong>
                        <h3>{{$sparepart->keterangan}}</h3>
                    </div>
                </div>
                <hr>
                <div class="row text-center m-t-10">
                    <div class="col-md-4 col-xs-6 b-r"><strong>End Stok</strong>
                        <h1>{{$sparepart->minimum}}</h1>
                    </div>
                    <div class="col-md-4 col-xs-6 b-r"><strong>Stok</strong>
                        @if ($sparepart->jumlah < $sparepart->minimum)
                        <h1 style="color: red">{{$sparepart->jumlah}}</h1>
                        <small>Segera PP lagi</small>
                        @else
                        <h1 style="color: green">{{$sparepart->jumlah}}</h1>
                        @endif
                    </div>
                    <div class="col-md-4"><strong>Satuan</strong>
                        <h1>{{$sparepart->unit->kode}}</h1>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <form action="/sparepart/{{ $sparepart->id }}/delete" method="POST">
                        @method('delete')
                        @csrf
                        <a href="/sparepart" class="btn btn-warning btn-outline">Kembali</a>
                        <span>&nbsp;</span>
                        <a href="/sparepart/{{ $sparepart->id }}/edit" class="btn btn-info btn-outline">Ubah Data</a>
                        <span>&nbsp;</span>
                        <button type="submit" class="btn btn-danger btn-outline" onclick="return confirm('Yakin mau hapus datanya niiih ??')">Hapus Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
