@extends('layouts.master')
@section('tittle') Master Crew @endsection
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Crew Engineering</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="active"><a href="#">Master Crew</a></li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-8">
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
                                <th width="70" class="text-center">#</th>
                                <th>Nama </th>
                                <th>Scope</th>
                                <th>Masuk Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($crew as $crew)
                            <tr>
                                <th scope="row"> &emsp; {{ $loop->iteration }}</th>
                                <td><?=$crew->nama; ?></td>
                                <td><?=$crew->scope; ?></td>
                                <td><?=$crew->created_at; ?></td>
                                {{-- <td>
                                    <form action="/position/{{ $user->id }}/delete" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="/position/{{ $user->id }}/edit" class="btn btn-info btn-outline btn-circle btn-md m-r-10 d-inline"><i class="ti-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger btn-outline btn-circle btn-md m-r-5 d-inline" onclick="return confirm('Yakin mau hapus datanya niiih ??')"><i class="ti-trash"></i></button>
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
                    <form action="/crew/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="control-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                            <select type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                <option value="Bencong">Lain-lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="@" required>
                        </div>
                        <div class="form-group">
                            <label for="kontak" class="control-label">No. HP/Whatsapp</label>
                            <input name="kontak" type="text" class="form-control" id="kontak" required>
                        </div>
                        <div class="form-group">
                            <label for="scope" class="control-label">Scope</label>
                            <select type="text" name="scope" class="form-control" id="scope">
                                <option value="Admin">Admin</option>
                                <option value="Automasi">Automasi</option>
                                <option value="Boiler">Boiler</option>
                                <option value="Filling">Filling</option>
                                <option value="Packaging">Packaging</option>
                                <option value="Support">Support</option>
                                <option value="Utility">Utility</option>
                                <option value="Workshop">Workshop</option>
                            </select>
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
