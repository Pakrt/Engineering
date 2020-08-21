@extends('layouts.master')
@section('tittle') Master History @endsection
@section('content')
{{-- <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}


<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Master History</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/history') }}">Master History</a></li>
            <li class="active">Detail History</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="panel">
            <div class="white-box">
                <div class="panel panel-default">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-header">
                            <h3 style="text-align: center">{{$history->id_komponen}}</h3>
                        </div>
                        <div class="panel-body">
                            <h4>Keterangan</h4>
                            <p>{{$history->keterangan}}</p>
                            <h4>Tanggal</h4>
                            <p>{{$history->tanggal}}</p>
                            <h4>User</h4>
                            <p>{{$history->user}}</p>
                        </div>
                        <div class="panel-footer">
                            <form action="/history/{{ $history->id }}/delete" method="POST">
                                @method('delete')
                                @csrf
                                {{-- <a href="/history/{{ $history->id_komponen }}/detail" class="btn btn-info btn-outline btn-circle btn-lg"><i class="ti-receipt"></i></a> --}}
                                <a href="/history/{{ $history->id }}/edit" class="btn btn-info btn-outline btn-circle btn-lg"><i class="ti-pencil-alt"></i></a>
                                <button type="submit" class="btn btn-danger btn-outline btn-circle btn-lg" onclick="return confirm('Yakin mau hapus datanya niiih ??')"><i class="ti-trash"></i></button>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- jQuery -->
<script src="/assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="/assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/assets/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/assets/js/custom.min.js"></script>


@endsection
