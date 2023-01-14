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
        Schema::create('biodatasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengguna')->unsigned();
            $table->string('nisn');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('ttg');
            $table->string('jk');
            $table->string('agama');
            $table->string('hp');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('status');
            $table->string('keterangan');
            $table->enum('status1',['Belum Lengkap','Sudah Lengkap'])->default('Belum Lengkap');
            $table->rememberToken();
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
        Schema::dropIfExists('biodatasiswa');
    }
};
