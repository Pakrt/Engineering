@extends('layouts.master')
<style>
    .col-md-8 .btn {
        position: absolute;
    top: 90%;
    left: ;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: transparent;
    color: white;
    font-size: 20px;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
    }

    .col-md-4 .btn:hover{
        background-color: rgb(103, 155, 253);
    }
</style>
@section('tittle') Master Sparepart @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Detail Sparepart</h4> </div>
    <div class="col-lg-9 col-sm-8 col-xs-12">
        <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
        <ol class="breadcrumb">
            <li class="btn btn-info btn-xs"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/master') }}">Master</a></li>
            <li class="btn btn-info btn-xs"><a href="{{ url('/sparepart') }}">Master Sparepart</a></li>
            <li class="active">Detail Sparepart</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="white-box">
            <div class="row">
                <div class="col-md-8 col-xs-12"></div>
                <a href="{{ $sparepart->getGambar() }}" target="_blank">
                    <img style=" width:300px; height:300px; border-radius:5%" alt="sparepart" src="{{ $sparepart->getGambar() }}">
                </a>
                <div class="col-md-4">
                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn">
                        <i class="fa fa-pencil"></i>
                    </button>
                </div>
            </div>
            <div class="user-btm-box">
                <div class="row text-center m-t-10">
                    <div class="col-md-6 b-r"><strong>Nama</strong>
                        <h3>{{$sparepart->nama}}</h3>
                    </div>
                    <div class="col-md-6"><strong>Kategori</strong>
                        <h3>{{$sparepart->category->kode}}</h3>
                    </div>
                </div>
                <hr>
                <div class="row text-center m-t-10">
                    <div class="col-md-6 b-r"><strong>Spesifikasi</strong>
                        <h3>{{$sparepart->spesifikasi}}</h3>
                    </div>
                    <div class="col-md-6"><strong>Keterangan</strong>
                        <h3>{{$sparepart->keterangan}}</h3>
                    </div>
                </div>
                <hr>
                <div class="row text-center m-t-10">
                    <div class="col-md-4 col-xs-6 b-r"><strong>End Stok</strong>
                        <h1>{{$sparepart->minimum}}</h1>
                    </div>
                    <div class="col-md-4 col-xs-6 b-r"><strong>Stok</strong>
                        @if ($sparepart->jumlah < $sparepart->minimum)
                        <h1 style="color: red">{{$sparepart->jumlah}}</h1>
                        <small>Segera PP lagi</small>
                        @else
                        <h1 style="color: green">{{$sparepart->jumlah}}</h1>
                        @endif
                    </div>
                    <div class="col-md-4"><strong>Satuan</strong>
                        <h1>{{$sparepart->unit->kode}}</h1>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <form action="/sparepart/{{ $sparepart->id }}/delete" method="POST">
                        @method('delete')
                        @csrf
                        <a href="/sparepart" class="btn btn-warning btn-outline">Kembali</a>
                        <span>&nbsp;</span>
                        <a href="/sparepart/{{ $sparepart->id }}/edit" class="btn btn-info btn-outline">Ubah Data</a>
                        <span>&nbsp;</span>
                        <button type="submit" class="btn btn-danger btn-outline" onclick="return confirm('Yakin mau hapus datanya niiih ??')">Hapus Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        // $incomes = DB::select('select * from incomes where sparepart_id = ?', $income->sparepart_id);
        $income = DB::table('incomes')->where('sparepart_id', $sparepart->id)
        ->get();
        $outcome = DB::table('outcomes')->where('sparepart_id', $sparepart->id)
        ->get();
    ?>
    <div class="col-md-6 col-xs-12">
        <div class="white-box">

            <ul class="nav nav-tabs tabs customtab">
                <li class="active tab">
                    <a href="#lbm" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-home"></i></span> <span class="hidden-xs">Barang Masuk</span> </a>
                </li>
                <li class="tab">
                    <a href="#lbk" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Barang Keluar</span> </a>
                </li>
            </ul>
            <!-- /.tabs -->
            <div class="tab-content">
                <!-- .tabs 1 -->
                <div class="tab-pane active" id="lbm">
                    <div class="table-responsive m-t-5">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kode LBM</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($income as $income)
                                <tr>
                                    <td>{{ $income->tanggal }}</td>
                                    <td>{{ $income->kode }}</td>
                                    <td>{{ $income->jumlah }}</td>
                                    <td>{{ $income->keterangan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.tabs1 -->
                <!-- .tabs2 -->
                <div class="tab-pane" id="lbk">
                    <div class="table-responsive">
                        <table id="myTables" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kode LBK</th>
                                    {{-- <th>Sparepart</th> --}}
                                    <th>Jumlah</th>
                                    {{-- <th>Satuan</th> --}}
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($outcome as $outcome)
                                <tr>
                                    <td>{{ $outcome->tanggal }}</td>
                                    <td>{{ $outcome->kode }}</td>
                                    {{-- <td>{{ $outcome->sparepart->nama }}</td> --}}
                                    <td>{{ $outcome->jumlah }}</td>
                                    {{-- <td>{{ $outcome->sparepart->unit->kode }}</td> --}}
                                    <td>{{ $outcome->keterangan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.tabs2 -->
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel1">Upload Gambar</h4>
            </div>
            <div class="modal-body">
                <form action="/sparepart/{{ $sparepart->id }}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gambar" class="control-label">Gambar</label>
                        <input name="gambar" type="file" class="form-control" id="gambar">
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
