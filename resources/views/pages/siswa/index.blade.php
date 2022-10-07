@extends('layouts.master')

@section('content')
    <!-- Siswa -->
    <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>


    <!-- DataTales Example -->
    <a href="/siswa/tambah" class="btn btn-primary mb-3">Tambah Siswa</a>
    
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataSiswa" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Name</th>
                            <th>Kelas</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis kelamin</th>
                            <th>Score</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nisn }}</td>
                            <td>{{ $row->nama_siswa }}</td>
                            <td>{{ $row->Kelas->nama_kelas }}</td>
                            <td>{{ $row->tempat_lahir }}</td>
                            <td>{{ $row->tanggal_lahir }}</td>
                            <td>{{ $row->jenkel }}</td>
                            <td>{{ $row->score }}</td>
                            <td>
                                <a href="/siswa/detail/{{ $row->id_siswa }}" class="btn btn-success btn-sm">Detail</a>
                                <a href="/siswa/edit/{{ $row->id_siswa }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/siswa/delete/{{ $row->id_siswa }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

@endsection
