<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->string('short_description', 100)->nullable();
            $table->string('SKU', 25)->unique();
            $table->string('categories', 100);
            $table->float('price');
            $table->float('discount')->default(0);
            $table->unsignedInteger('in-stock')->default(0);
            $table->binary('thumbnail');
            $table->binary('images');
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
        Schema::dropIfExists('products');
    }
}
