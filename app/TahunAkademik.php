<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TahunAkademik extends Model
{
    protected $table = 'tahun_akademik';
    public $incrementing = false;
    public function mk_tawar(): HasMany

    {
        return $this->hasMany(MkTawar::class);
    }
}
