@extends('layouts.master')
@section('tittle') Master Component @endsection
@section('content')
{{-- <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-white">Komponen Desinfektan</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/maintenance') }}">Maintenance</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/sugar') }}">Sugar</a></li>
            <li class="active">Desinfektan</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="panel">
            <button class="btn btn-info" title="PID" type="button" onclick="
            if(document.getElementById('spoiler') .style.display=='none')
                {document.getElementById('spoiler') .style.display=''
            }
            else{document.getElementById('spoiler') .style.display='none'
            }">
            PID
            </button>
            <div id="spoiler" style="display:none">
                <img src="/assets/pid/411.jpg" width="100%" height="100%"">
            </div>
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
                            @foreach ($desinfektan as $desinfektan)
                            <tr>
                                <th scope="row">&emsp; {{ $loop->iteration}}</th>
                                <td><a href="/history/{{$desinfektan->id_komponen}}/detail">{{$desinfektan->id_komponen}}</a></td>
                                <td><a href="/history/{{$desinfektan->id_komponen}}/detail">{{$desinfektan->alias}}</a></td>
                                <td><a href="/history/{{$desinfektan->id_komponen}}/detail">{{$desinfektan->komponen}}</a></td>
                                <td>
                                    <a href="/component/{{$desinfektan->id}}/detail" class="btn btn-success"> <i class="mdi mdi-eye"></i> </a>
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
