<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('address');
            $table->string('city', 20);
            $table->biginteger('home_phone');
            $table->biginteger('cell_phone');
            $table->string('email')->unique();
            $table->string('applied_position', 35);
            $table->string('skill');
            $table->integer('salary');
            $table->string('gambar');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
};
