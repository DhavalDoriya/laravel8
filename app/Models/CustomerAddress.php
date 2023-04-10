<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;
    protected $table = 'customers_address';
    protected $primaryKey = 'address_id';

    public function many()
    {
        return $this->hasOne(Customer::class , 'customer_id' ,'address_id');
    }
}
