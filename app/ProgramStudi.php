<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramStudi extends Model
{
    protected $table = 'program_studi';
    public function mata_kuliah(): HasMany

    {
        return $this->hasMany(MataKuliah::class);
    }
    public function user(): HasMany

    {
        return $this->hasMany(User::class);
    }
}
