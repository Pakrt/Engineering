@extends('layouts.master')
@section('tittle') Master Position @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Master Position</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master') }}">Master</a></li>
            <li class="active">Master Position</li>
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
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="50" class="text-center">#</th>
                                <th>ID</th>
                                <th>POSISI</th>
                                <th width="80">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($positions as $positions)
                            <tr>
                                <th scope="row"> &emsp; {{ $loop->iteration }}</th>
                                <td><?=$positions->id; ?></td>
                                <td><?=$positions->nama; ?></td>
                                <td>
                                    <form action="/position/{{ $positions->id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="/position/{{ $positions->id }}/edit" class="btn btn-info btn-outline btn-circle btn-md m-r-10 d-inline"><i class="ti-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger btn-outline btn-circle btn-md m-r-5 d-inline" onclick="return confirm('Yakin mau hapus datanya niiih ??')"><i class="ti-trash"></i></button>
                                    </form>
                                    {{-- <a href="/position/{{ $data->id }}/delete" class="btn btn-danger btn-outline btn-circle btn-md m-r-10" onclick="return confirm('Yakin mau hapus datanya niih??')"><i class="ti-trash"></i></a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                    <form action="/position/create" method="POST">
                        @csrf
                        <div class="form-group{{$errors->has('id') ? 'has-error' : ''}}">
                            <label for="id_posisi" class="control-label">ID Posisi:</label>
                            <input name="id" type="text" class="form-control" id="id_posisi" value="{{old('id')}}" required>
                            @if($errors->has('id'))
                                <span class="help-block">{{$errors->first('id')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama Posisi</label>
                            <input type="text" name="nama" class="form-control" id="nama" required>
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
