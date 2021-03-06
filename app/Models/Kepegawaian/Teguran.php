<?php

namespace App\Models\Kepegawaian;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Teguran extends Model
{
    protected $table = "kep_tegurans";
    protected $guarded = [];

    public function pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai');
    }

    public function date($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function getSuratAttribute()
    {
        return $this->date($this->tgl_surat);
    }


}
