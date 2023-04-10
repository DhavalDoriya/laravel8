<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected  $primaryKey = 'author_id';



    protected $append = ['Links'];
    //manytomany
    public function manyto()
    {
        return $this->belongsToMany(Author::class, 'author_book', 'author_id', 'book_id');
    }


    public function getLinksAttribute()
    {
        return   ' test ';
    }

    public function setAuthorNameAttribute($value)
    {
        $this->attributes['author_name'] =  strtoupper($value);
    }

    public function getAuthorIdAttribute($value)
    {
        return  $value + 1;
    }
}
