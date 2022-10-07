<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $table = "tb_siswa";
    public $fillable = ['nisn','nama_siswa','id_kelas','tempat_lahir','tanggal_lahir','jenkel','alamat','score'];
    public $primaryKey = "id_siswa";

    public $timestamps = false;

    public function Kelas(){
        return $this->belongsTo('App\Kelas', 'id_kelas', 'id_kelas');
    }

    public function Penilaian(){
        return $this->belongsTo('App\Penilaian', 'id_penilaian', 'id_penilaian');
    }
}
