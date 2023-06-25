<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table  ='l_genre';

    protected $primaryKey = 'id';

    protected $fillable =[
        'name'
    ];
}
