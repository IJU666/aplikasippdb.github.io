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
        Schema::create('asalsekolah', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengguna')->unsigned();
            $table->integer('npsn');
            $table->string('nama_sekolah');
            $table->string('nomor_ijazah');
            $table->text('alamat_sekolah');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
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
        Schema::dropIfExists('asalsekolah');
    }
};
