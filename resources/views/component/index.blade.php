@extends('layouts.master')
@section('tittle') Master Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Master Component</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active"><a href="#">Master Component</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-8 col-xs-12">
        <div class="panel">
            <div class="panel-heading">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
            </div>
            @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                @endif
            <div class="white-box">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="70" class="text-center">#</th>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>POSISI</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($components as $components)
                            <tr>
                                <th scope="row"> &emsp; {{ $loop->iteration }}</th>
                                <td>{{ $components->id_komponen }}</td>
                                <td>{{ $components->komponen }}</td>
                                <td>{{ $components->position->nama }}</td>
                                <td class="d-inline">
                                    <form action="/component/{{ $components->id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="/component/{{ $components->id }}/edit" class="btn btn-info btn-outline btn-circle btn-sm"><i class="ti-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger btn-outline btn-circle btn-sm" onclick="return confirm('Yakin mau hapus datanya niiih ??')"><i class="ti-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                    <form action="/component/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_komponen" class="control-label">ID Komponen</label>
                            <input name="id_komponen" type="text" class="form-control" id="id_komponen">
                        </div>
                        <div class="form-group">
                            <label for="komponen" class="control-label">Nama Komponen</label>
                            <input type="text" name="komponen" class="form-control" id="komponen">
                        </div>
                        <div class="form-group">
                            <label for="id_posisi" class="control-label">ID Posisi</label>
                            <select type="text" name="id_posisi" class="form-control" id="id_posisi">
                                @foreach ($position as $position)
                                <option value="{{ $position->id }}">{{ $position->nama }}</option>
                                @endforeach
                            </select>
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
