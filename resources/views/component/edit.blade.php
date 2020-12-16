@extends('layouts.master')
@section('tittle') Master Component @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Master Component</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home')}}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/component')}}">Master Component</a></li>
            <li class="active">Edit Component</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6">
        <div class="white-box text-white">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/component/{{ $component->id }}/update">
                        @csrf
                        <div class="form-group col-md-4">
                            <label for="id_komponen">ID Komponen</label>
                            <div>
                                <input type="text" class="form-control text-white" id="id_komponen" name="id_komponen" value="{{$component->id_komponen}}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="alias">Nama Komponen</label>
                            <div>
                                <input type="text" class="form-control text-white" id="alias" name="alias" value="{{$component->alias}}" required>
                            </div>
                        </div>

                        <div class="form-group col-md-7">
                            <label for="komponen">Komponen</label>
                            <div>
                                <input type="text" class="form-control text-white" id="komponen" name="komponen" value="{{$component->komponen}}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="id_posisi" class="control-label">Mesin</label>
                            <select type="text" name="id_posisi" class="select2 form-control text-white" id="id_posisi" required>
                                <option value="{{ $component->position->id }}">{{ $component->position->id }} - {{ $component->position->nama }}</option>
                                @foreach ($position as $position)
                                <option value="{{ $position->id }}">{{ $position->id }} - {{ $position->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="keterangan">Keterangan</label>
                            <div>
                                <textarea class="form-control text-white" name="keterangan" id="keterangan">{{$component->keterangan}}</textarea>
                            </div>
                        </div>

                        <div class="modal-footer col-md-12">
                            <a href="{{ url('/component') }}" class="btn btn-warning pull-left" onclick="return confirm('Yakin mau balik ??')">Kembali</a>
                            <button type="submit" class="btn btn-success" onclick="return confirm('Udah selesai update nya ??')">Update Data</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
