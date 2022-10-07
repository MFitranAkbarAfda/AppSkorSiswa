@extends('layouts.master')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Tambah Siswa</h1>


        <form action="/siswa/store" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="" class="form-label">NISN</label>
                <input type="number" name="nisn" class="form-control" id="" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kelas</label>

                <select name="id_kelas" id="" class="form-control">
                    @foreach($kelas as $item)
                        <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="">
                    </div>
                </div>
            </div>
             
            <div class="col-md-4">

            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                <div class="mb-3">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenkel" id="inlineRadio1" value="P">
                        <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenkel" id="inlineRadio2" value="L">
                        <label class="form-check-label" for="inlineRadio2">Laki laki</label>
                    </div>

                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="10" class="form-control">
                    
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    


@endsection