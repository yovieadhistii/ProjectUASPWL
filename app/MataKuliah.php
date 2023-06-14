<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table  ='mata_kuliah';

    protected $primaryKey = 'kodes';

    protected $fillable =[
        'kodes',
        'nama',
        'sks',
        'semester',
        'program_studi_kode_prodi'
    ];
}
