@extends('layouts.master')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Penilaian Siswa</h1>


        <form action="/penilaian/store" method="POST">
            {{ csrf_field() }}    

            <div classs="col-md-4">
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Nilai</label>
                    <input type="date" name="tanggal_nilai" class="form-control" id="">
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Siswa</label>

                <select name="id_siswa" id="" class="form-control">
                    @foreach($siswa as $s)
                        <option value="{{ $s->id_siswa }}">{{ $s->nisn }} - {{ $s->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Pelanggaran Yang dibuat</label>

                <select name="id_siswa" id="" class="form-control">
                    @foreach($pelanggaran as $p)
                        <option value="{{ $p->id_pelanggaran }}">{{ $p->nama_pelanggaran }}</option>
                    @endforeach
                </select>
            </div>
             
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    


@endsection