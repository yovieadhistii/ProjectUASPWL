<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MkTawar extends Model
{

    protected $table = 'mk_tawar';

    public function tahun_akademik(): BelongsTo
    {
        return $this->belongsTo(TahunAkademik::class,'tahun_akademik_id','id');
    }
    public function mata_kuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class,'mata_kuliah_kode','id');
    }
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'dkbs','mk_tawar_id','users_id');
    }
}
