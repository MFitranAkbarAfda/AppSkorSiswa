@extends('layouts.master')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
    </div>
    <div class="card-body">
        <h4>{{ $siswa->nama_siswa }}</h4>

        @if($siswa->jenkel == "L")
            <h5>Laki - laki</h5>
        @elseif($siswa->jenkel == "P")
            <h5>Perempuan</h5>
        @endif

        <h6>NISN : {{ $siswa->nisn }}</h6>

        @foreach($kelas as $k)
        
            @if($siswa->id_kelas == $k->id_kelas)
                <h6>Kelas : {{ $k->nama_kelas }}</h6>
            @endif

        @endforeach

        <h6>Tempat Lahir : {{ $siswa->tempat_lahir }}</h6>
        <h6>Tanggal Lahir : {{ $siswa->tanggal_lahir }}</h6>

        <p>Alamat : {{ $siswa->alamat }}</p>
    </div>
</div>

@endsection