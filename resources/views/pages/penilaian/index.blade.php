@extends('layouts.master')

@section('content')

<!-- Siswa -->
<h1 class="h3 mb-2 text-gray-800">Data Penilaian</h1>


<!-- DataTales Example -->
<a href="/penilaian/tambah" class="btn btn-primary mb-3">Tambah Penilaian</a>
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
                        <th>Tanggal Nilai</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Nama Pelanggaran</th>
                        <th>Point</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penilaian as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->tanggal_nilai }}</td>
                        @foreach($row->siswa as $s)
                            <td>{{ $s->nisn }}</td>
                            <td>{{ $s->nama_siswa }}</td>
                        @endforeach

                        @foreach($row->pelanggaran as $p)
                        <td>{{ $p->nama_pelanggaran }}</td>
                        @endforeach
                        <td>{{ $row->score }}</td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Detail</a>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection