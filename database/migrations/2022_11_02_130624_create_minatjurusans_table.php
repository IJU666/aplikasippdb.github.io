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
        Schema::create('minatjurusan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengguna')->unsigned();
            $table->string('jurusan');
            $table->string('hobi');
            $table->string('radio1');
            $table->string('radio2');
            $table->text('ketahui');
            $table->string('kemampuan');
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
        Schema::dropIfExists('minatjurusan');
    }
};
