<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $fillable = ['tujuan','sifat','tgl_disposisi','isi','suratmasuk_id'];

    public function smasuk()
    {
        return $this->belongsTo('App\SuratMasuk');
    }
}
