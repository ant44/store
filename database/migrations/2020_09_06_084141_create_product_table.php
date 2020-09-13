<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->double('price');
            $table->double('old_price')->nullable();
            $table->text('description')->nullable();
            $table->string('product_id')->unique();
            $table->string('thumbail');
            $table->string('image');
            $table->string('category')->defined('all_category');
            $table->string('discount')->nullable();
            $table->integer('count')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->integer('rate')->default(1);
            $table->integer('status');
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
        Schema::dropIfExists('product');
    }
}
