@extends('layouts.master')

@section('content')



<!-- DataTales Example -->

<div class="col-md-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
        </div>
        <div class="card-body">

        <form action="/kategori/store" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control">
            </div>


            <button class="btn btn-primary btn-sm">Tambah</button>
        </form>



        </div>
    </div>
</div>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $row)
                    <tr>
                        <td>{{ $row->nama_kategori }}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editKategori{{ $row->id_kategori }}">Edit</a>
                            <a href="/kategori/delete/{{ $row->id_kategori }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>


                    <!-- Edit Kategori Modal-->
                    <div class="modal fade" id="editKategori{{ $row->id_kategori }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <form action="/kategori/{{ $row->id_kategori }}" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Kelas</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                
                                <div class="modal-body">

                                    
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label for="">Nama Kelas</label>
                                            <input type="text" name="nama_kategori" class="form-control" value="{{ $row->nama_kategori }}">
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