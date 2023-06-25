<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table  ='l_book';

    protected $primaryKey = 'isbn';
    protected $fillable =[
        'isbn',
        'title',
        'author',
        'publisher',
        'publish_year',
        'cover',
        'genre_id'
    ];
}
