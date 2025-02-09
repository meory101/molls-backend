<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('stores')) {
            Schema::create('stores', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedBigInteger('mall_id');
                $table->unsignedBigInteger('section_id')->nullable();
                $table->timestamps();

                $table->foreign('mall_id')->references('id')->on('malls')->onDelete('cascade');
                $table->foreign('section_id')->references('id')->on('sections')->onDelete('set null');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
