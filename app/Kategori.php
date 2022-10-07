<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $timestamps = false;
    protected $table = 'tb_kategori';
    protected $fillable = ['nama_kategori'];
    protected $primaryKey = 'id_kategori';

  

}
