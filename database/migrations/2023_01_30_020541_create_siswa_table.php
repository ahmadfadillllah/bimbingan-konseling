<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama_lengkap');
            $table->foreignId('kelas_id')->constrained('kelas')->cascadeOnDelete();
            $table->string('alamat');
            $table->string('no_hp');
            $table->foreignId('wali_id')->constrained('users')->cascadeOnDelete();
            $table->string('orang_tua');
            $table->string('no_hp_orang_tua');
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
        Schema::dropIfExists('siswa');
    }
}
