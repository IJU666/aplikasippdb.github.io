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
        Schema::create('ortu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengguna')->unsigned();
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->string('pendidikan_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('hp_ayah');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('hp_ibu');
            $table->timestamps();
            $table->foreign('pengguna')->references('id')->on('pengguna')->onDelete('cascade');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ortu');
    }
};
