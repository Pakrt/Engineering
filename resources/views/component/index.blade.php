@extends('layouts.master')
@section('tittle') Master Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Master Component Page</h4> </div>
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
                                <th>ID</th>
                                <th>NAMA KOMPONEN</th>
                                <th>KOMPONEN</th>
                                <th>MESIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($components as $components)
                            <tr>
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->id_komponen }}</a></td>
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->alias }}</a></td>
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->komponen }}</a></td>
                                <td><a href="/component/{{ $components->id}}/detail">{{ $components->position->nama }}</a></td>
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
                        <div class="form-group{{$errors->has('id_komponen') ? 'has-error' : ''}}">
                            <label for="id_komponen" class="control-label">ID Komponen</label>
                            <input name="id_komponen" type="text" class="form-control" id="id_komponen" value="{{old('id_komponen')}}" required>
                            @if($errors->has('id_komponen'))
                                <span class="help-block">{{$errors->first('id_komponen')}}</span>
                            @endif
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
                            <select type="text" name="id_posisi" class="form-control select2" id="id_posisi" required>
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
