<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('discounts')) {
            Schema::create('discounts', function (Blueprint $table) {
                $table->id();
                $table->string('description');
                $table->date('start');
                $table->date('end_date');
                $table->unsignedBigInteger('product_id');
                $table->unsignedBigInteger('store_id');
                $table->unsignedBigInteger('mall_id');
                $table->timestamps();

                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
                $table->foreign('mall_id')->references('id')->on('malls')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
