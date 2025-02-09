<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('sections')) {
            Schema::create('sections', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description')->nullable();
                $table->unsignedBigInteger('mall_id');
                $table->unsignedBigInteger('store_id')->nullable();
                $table->unsignedBigInteger('product_id')->nullable();
                $table->timestamps();

                $table->foreign('mall_id')->references('id')->on('malls')->onDelete('cascade');
                $table->foreign('store_id')->references('id')->on('stores')->onDelete('set null');
                $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
