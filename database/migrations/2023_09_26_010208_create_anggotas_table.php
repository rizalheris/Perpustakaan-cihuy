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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //$table->integer('id');
            $table->integer('kode');
            $table->integer('nama');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->integer('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('telepon');
            $table->text('alamat');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
};
