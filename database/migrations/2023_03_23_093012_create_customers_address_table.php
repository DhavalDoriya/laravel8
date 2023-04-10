<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_address', function (Blueprint $table) {
            $table->integer('address_id');
           $table->integer('customer_id');
            $table->integer('country_id');
            $table->string('first_line',250);
            $table->string('second_line',250);
            $table->string('city',150);
            $table->string('state',150);
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_address');
    }
}
