@extends('layouts.master')
@section('tittle') Master Sparepart @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Master Sparepart Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master') }}">Master</a></li>
            <li class="active">Master Sparepart</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-8 col-xs-12">
        <div class="panel">
            <div class="panel-heading">
                <a href="/sparepart/form" class="btn btn-info btn-outline">Tambah Data</a>
            </div>
            @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                @endif
            <div class="white-box">
                <div class="table-responsive m-t-5">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="50" class="text-center">#</th>
                                <th>KATEGORI</th>
                                <th>SPAREPART</th>
                                <th>STOK</th>
                                <th>SATUAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spareparts as $spareparts)
                            <tr>
                                <th scope="row"><a href="/sparepart/{{ $spareparts->id}}/detail"> &emsp; {{ $loop->iteration }}</a></th>
                                <td><a href="/sparepart/{{ $spareparts->id}}/detail">{{ $spareparts->category->kode }}</a></td>
                                <td><a href="/sparepart/{{ $spareparts->id}}/detail">{{ $spareparts->nama }}</a></td>
                                <td><a href="/sparepart/{{ $spareparts->id}}/detail">{{ $spareparts->jumlah }}</a></td>
                                <td><a href="/sparepart/{{ $spareparts->id}}/detail">{{ $spareparts->unit->kode }}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
