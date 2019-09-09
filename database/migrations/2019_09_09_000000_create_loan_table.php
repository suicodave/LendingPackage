<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanTable extends Migration
{
    function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedDecimal('principal_amount', 65, 2);
            $table->smallInteger('term');
            $table->timestamps();

            $table->index('created_at');
            $table->index('customer_id');
        });
    }


    function down()
    {
        Schema::dropIfExists('loans');
    }
}