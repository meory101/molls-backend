<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('advertisements')) { // تحقق من وجود الجدول قبل إنشائه
            Schema::create('advertisements', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description');
                $table->unsignedBigInteger('mall_id');
                $table->unsignedBigInteger('user_id');
                $table->timestamps();

                $table->foreign('mall_id')->references('id')->on('malls')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
