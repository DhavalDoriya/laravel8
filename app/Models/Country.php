<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function manyhas()
    {
        return $this->hasManyThrough( CustomerAddress::class , Customer::class , 'customer_id' ,'customer_id','country_id' , 'customer_id');
    }
}
