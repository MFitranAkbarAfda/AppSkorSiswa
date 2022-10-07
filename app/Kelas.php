<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $table = "tb_kelas";
    public $fillable = ['nama_kelas'];
    public $primaryKey = 'id_kelas';
    public $timestamps = false;

    
    public function Siswa() {
        return $this->hasMany('App\Siswa', 'id_siswa','id_siswa');
    }
}
