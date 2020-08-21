@extends('layouts.master')
@section('tittle') Weekly Report @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <h4 class="page-title">Report Page</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active">Report</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
             <div class="row row-in">
                  <div class="col-lg-3 col-sm-6 row-in-br">
                    @if ($total>50)
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-danger"><i class="ti-alert"></i></span>
                        </li>
                        <li class="col-last"><h3 class="counter text-right m-t-15"><?= $total ?></h3></li>
                        <li class="col-middle">
                            <h4>Downtime /W</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?=$total?>" aria-valuemin="50" aria-valuemax="100" style="width: <?=$total?>%">
                                </div>
                            </div>
                        </li>
                    </ul>
                    @else
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-warning"><i class="fa fa-clock-o"></i></span>
                        </li>
                        <li class="col-last"><h3 class="counter text-right m-t-15"><?= $total ?></h3></li>
                        <li class="col-middle">
                            <h4>Downtime /W</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?=$total?>" aria-valuemin="0" aria-valuemax="50" style="width: <?=$total?>%">
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endif
                  </div>
                  <div class="col-lg-3 col-sm-6  b-0">
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-primary"><i class="fa fa-clock-o"></i></span>
                        </li>
                        <li class="col-last"><h3 class="counter text-right m-t-15"><?= $total ?></h3></li>
                        <li class="col-middle">
                            <h4>Downtime /M</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="<?=$total?>" aria-valuemin="0" aria-valuemax="50" style="width: <?=$total/2?>%">
                                </div>
                            </div>
                        </li>
                    </ul>
                  </div>
                </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="white-box col-md-4">
            <h2>Gambar Grafik</h2>
        </div>
        <div class="col-md-1 box">

        </div>
        <div class="white-box col-md-7">
            <div class="table-responsive">
                <table id="myTable" class="display block" cellspacing="0" width="100px">
                    <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th width="30px">Tanggal</th>
                            <th width="30px">Mesin</th>
                            <th width="10px">Durasi<br>(menit)</th>
                            <th width="30px">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($downtime as $downtime)
                        <tr>
                            {{-- <th scope="row">&emsp;{{ $loop->iteration }}</th> --}}
                            <td>&emsp;{{ $downtime->tanggal }}</td>
                            <td>&emsp;{{ $downtime->id_posisi }}</td>
                            <td>&emsp;{{ $downtime->durasi}}</td>
                            <td>{{ $downtime->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
