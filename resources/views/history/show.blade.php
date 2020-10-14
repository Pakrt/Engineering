@extends('layouts.master')
@section('tittle') Component History @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Component History</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/maintenance' )}}">Maintenance Component</a></li>
            <li class="active"><a href="#">Component History</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <div class="panel-heading">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="example23" class="display block" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Komponen</th>
                                <th>Nama Komponen</th>
                                <th>Dibuat tanggal</th>
                                <th>PIC</th>
                                <th>Keterangan</th>
                                {{-- <th>Update Terakhir</th>
                                <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($komponen as $history)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="/history/{{$history->id}}/rinci">{{ $history->id_komponen }}</a></td>
                                <td><a href="/history/{{$history->id}}/rinci">{{ $history->component->alias }}</a></td>
                                <td>{{ $history->tanggal }}</td>
                                <td>{{ $history->user }}</td>
                                <td>{{ $history->keterangan }}</td>
                                {{-- <td>{{ $history->updated_at }}</td>
                                <td>
                                    <form action="/history/{{ $history->id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="/history/{{ $history->id }}/edit" class="btn btn-info btn-outline btn-circle btn-md m-r-5"><i class="ti-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger btn-outline btn-circle btn-md m-r-5" onclick="return confirm('Yakin mau hapus datanya niiih ??')"><i class="ti-trash"></i></button>
                                    </form>
                                </td> --}}
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
                    <form action="/history/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_komponen" class="control-label">ID Komponen</label>
                            <input name="id_komponen" type="text" class="form-control" id="id_komponen" value="{{ $data }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="control-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="user" class="control-label">PIC</label>
                            <input type="text" name="user" class="form-control" id="user" value="{{Auth::user()->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="keterangan" required></textarea>
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
