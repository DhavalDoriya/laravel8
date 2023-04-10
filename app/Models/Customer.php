<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected  $primaryKey = 'customer_id';


    public function many()
    {
        return $this->hasMany(CustomerAddress::class , 'customer_id' ,'customer_id' );
    }


    // public function image()
    // {
    //     return $this->morphOne(Image::class , 'imageable');
    //     }


    // public function manyhas()
    // {
    //     return $this->hasManyThrough( CustomerAddress::class , Country::class , 'customer_id' ,'country_id','country_id' , 'customer_id');
    // }
}
