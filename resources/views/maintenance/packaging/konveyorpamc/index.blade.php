@extends('layouts.master')
@section('tittle') Master Component @endsection
@section('content')
{{-- <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}


<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Komponen Konveyor PAM C</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/maintenance') }}">Maintenance</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/packaging') }}">Packaging</a></li>
            <li class="active">Konveyor PAM C</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="panel">
            <div class="white-box">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Komponen</th>
                                <th>Nama Komponen</th>
                                <th>Komponen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($konveyorpamc as $konveyorpamc)
                            <tr>
                                <th scope="row">&emsp; {{ $loop->iteration}}</th>
                                <td><a href="/history/{{$konveyorpamc->id_komponen}}/detail">{{$konveyorpamc->id_komponen}}</a></td>
                                <td><a href="/history/{{$konveyorpamc->id_komponen}}/detail">{{$konveyorpamc->alias}}</a></td>
                                <td><a href="/history/{{$konveyorpamc->id_komponen}}/detail">{{$konveyorpamc->komponen}}</a></td>
                                <td>
                                    <a href="/component/{{$konveyorpamc->id}}/detail" class="btn btn-success"> <i class="mdi mdi-eye"></i> </a>
                                </td>
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
