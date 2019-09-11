<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePaymentFrequency extends Migration
{
    function up()
    {
        Schema::create('lending_payment_frequencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedSmallInteger('months_per_installment');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('created_at');
            $table->index('months_per_installment');
        });
    }


    function down()
    {
        Schema::dropIfExists('lending_payment_frequencies');
    }
}
