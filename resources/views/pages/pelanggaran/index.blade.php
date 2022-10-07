@extends('layouts.master')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pelanggaran</h1>

<div class="col-md-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pelanggaran</h6>
        </div>
        <div class="card-body">

        <form action="/pelanggaran/store" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Pelanggaran</label>
                <input type="text" name="nama_pelanggaran" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Point</label>
                <input type="number" name="point" class="form-control">
            </div>


            <button class="btn btn-primary btn-sm">Tambah</button>
        </form>



        </div>
    </div>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggaran</th>
                        <th>Point</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_p as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama_pelanggaran }}</td>
                        <td>{{ $row->point }}</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPelanggaran{{ $row->id_pelanggaran }}">Edit</a>
                            <a href="/pelanggaran/delete/{{ $row->id_pelanggaran }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>

                    <!-- Edit Pelanggaran Modal-->
                    <div class="modal fade" id="editPelanggaran{{ $row->id_pelanggaran }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <form action="/pelanggaran/{{ $row->id_pelanggaran }}" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Pelanggaran</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                
                                <div class="modal-body">

                                    
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label for="">Nama Pelanggaran</label>
                                            <input type="text" name="nama_pelanggaran" class="form-control" value="{{ $row->nama_pelanggaran }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Point</label>
                                            <input type="number" name="point" class="form-control" value="{{ $row->point }}">
                                        </div>
                                    
                                
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Perbarui</button>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection