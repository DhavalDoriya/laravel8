<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected  $primaryKey = 'book_id';



        //1.  One to one Book and price
    public function one()
    {
        return $this->hasOne(BookPrice::class , 'book_id' ,'book_id' );
        // return $this->hasOne(Govdocument::class ,'customer_id','govdocument_id' );
    }



    //manytomany
    public function manyto()
    {
        return $this->belongsToMany(Author::class , 'author_book' , 'book_id' ,'author_id');
        // return $this->hasOne(Order::class)->OfMany('id', 'max');
    }
}
