<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->string('user_surname');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('country');
            $table->string('city');
            $table->string('addres');
            $table->float('total');
            $table->unsignedBigInteger('status_id');
            $table->string('type')->unique();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');

            // $table->foreign('status_id')->references('id')->on('orders_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
