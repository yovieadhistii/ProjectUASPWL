<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public function program_studi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class);
    }
    public function mk_tawar(): HasMany

    {
        return $this->hasMany(MkTawar::class);
    }
  
}
