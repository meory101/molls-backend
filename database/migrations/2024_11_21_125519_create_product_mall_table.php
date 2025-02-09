<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductMallTable extends Migration
{
    public function up()
    {
        Schema::create('product_mall', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mall_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('mall_id')->references('id')->on('malls')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_mall');
    }
}
