@extends('layouts.master')
@section('tittle') Master Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Master Component Page</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master') }}">Master</a></li>
            <li class="active">Master Component</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="panel">
            <div class="panel-heading">
                <button type="button" class="btn btn-info btn-outline" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus"></i></button>
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
                                {{-- <th width="70" class="text-center">#</th> --}}
                                <th>ID</th>
                                <th>NAMA KOMPONEN</th>
                                <th>KOMPONEN</th>
                                <th>MESIN</th>
                                {{-- <th>AKSI</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($components as $components)
                            <tr>
                                {{-- <th scope="row"> &emsp; {{ $loop->iteration }}</th> --}}
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->id_komponen }}</a></td>
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->alias }}</a></td>
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->komponen }}</a></td>
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->position->nama }}</a></td>
                                {{-- <td>{{ $components->id_posisi }}</td> --}}
                                {{-- <td class="d-inline">
                                    <form action="/component/{{ $components->id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="/component/{{ $components->id }}/edit" class="btn btn-info btn-outline btn-circle btn-sm"><i class="ti-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger btn-outline btn-circle btn-sm" onclick="return confirm('Yakin mau hapus datanya niiih ??')"><i class="ti-trash"></i></button>
                                    </form>
                                </td> --}}
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
                            <input name="id_komponen" type="text" class="form-control" id="id_komponen" required>
                        </div>
                        <div class="form-group">
                            <label for="alias" class="control-label">Nama Komponen</label>
                            <input type="text" name="alias" class="form-control" id="alias" placeholder="Alias" required>
                        </div>
                        <div class="form-group">
                            <label for="komponen" class="control-label">Komponen</label>
                            <input type="text" name="komponen" class="form-control" id="komponen" required>
                        </div>
                        <div class="form-group">
                            <label for="id_posisi" class="control-label">Mesin</label>
                            <select type="text" name="id_posisi" class="form-control" id="id_posisi" required>
                                @foreach ($position as $position)
                                <option value="{{ $position->id }}">{{ $position->id }} - {{ $position->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
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
