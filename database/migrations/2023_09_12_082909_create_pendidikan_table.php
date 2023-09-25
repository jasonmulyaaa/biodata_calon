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
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_biodata');
            $table->enum('pendidikan_terakhir', ['SD', 'SMP', 'SMA/SMK', 'D3', 'D4', 'S1', 'S2', 'S3']);
            $table->string('intuisi_akademik', 50);
            $table->string('jurusan', 30);
            $table->integer('tahun_lulus');
            $table->float('ipk');
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
        Schema::dropIfExists('pendidikan');
    }
};
