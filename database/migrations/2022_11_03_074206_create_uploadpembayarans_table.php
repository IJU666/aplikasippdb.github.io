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
        Schema::create('uploadpembayaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengguna')->unsigned();
            $table->bigInteger('biodatasiswa')->unsigned();
            $table->date('ttgpembayaran');
            $table->time('jampembayaran');
            $table->string('image');
            $table->timestamps();

            $table->foreign('pengguna')->references('id')->on('pengguna')->onDelete('cascade');
            $table->foreign('biodatasiswa')->references('id')->on('biodatasiswa')->onDelete('cascade');

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
        Schema::dropIfExists('uploadpembayaran');
    }
};
