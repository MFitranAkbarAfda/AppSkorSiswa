@extends('layouts.master')

@section('content')



<!-- DataTales Example -->

<div class="col-md-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kelas</h6>
        </div>
        <div class="card-body">

        <form action="/kelas/store" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control">
            </div>


            <button class="btn btn-primary btn-sm">Tambah</button>
        </form>



        </div>
    </div>
</div>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data kelas</h6>
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
                    @foreach($kelas as $row)
                    <tr>
                        <td>{{ $row->nama_kelas }}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editKelas{{ $row->id_kelas }}">Edit</a>
                            <a href="/kelas/delete/{{ $row->id_kelas }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>


                                        <!-- Edit Kelas Modal-->
                    <div class="modal fade" id="editKelas{{ $row->id_kelas }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <form action="/kelas/{{ $row->id_kelas }}" method="post">
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
                                            <input type="text" name="nama_kelas" class="form-control" value="{{ $row->nama_kelas }}">
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