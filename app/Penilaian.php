<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    public $table = "tb_penilaian";
    public $fillable = ['tanggal_nilai','id_siswa','id_pelanggaran','score'];
    public $primaryKey = "id_penilaian";

    public function Siswa()
    {
        return $this->hasOne('App\Siswa', 'id_siswa', 'id_siswa');
    }

    public function Pelanggaran()
    {
        return $this->hasOne('App\Pelanggaran', 'id_pelanggaran', 'id_pelanggaran');
    }
   
}
