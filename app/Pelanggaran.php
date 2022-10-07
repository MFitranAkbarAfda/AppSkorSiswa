<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    public $table = "tb_pelanggaran";
    protected $fillable = ['nama_pelanggaran','point'];
    public $primaryKey = "id_pelanggaran";

    public $timestamps = false;

    public function Penilaian(){
        return $this->belongsTo('App\Penilaian', 'id_penilaian', 'id_penilaian');
    }
}
