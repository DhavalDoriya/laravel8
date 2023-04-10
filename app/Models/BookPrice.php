<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPrice extends Model
{
    use HasFactory;



    //1.  One to one Book and price
    public function one()
    {
        return $this->hasOne(Book::class , 'book_id' ,'book_id' );

        // return $this->hasOne(Govdocument::class ,'customer_id','govdocument_id' );
    }
}
