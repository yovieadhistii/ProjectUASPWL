<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TahunAkademik extends Model
{
    protected $table = 'tahun_akademi';
    public function mk_tawar(): HasMany

    {
        return $this->hasMany(MkTawar::class);
    }
}
