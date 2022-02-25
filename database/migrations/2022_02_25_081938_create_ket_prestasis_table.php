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
        Schema::create('ket_prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('prestasi_id');
            $table->string('nama')->nullable();
            $table->string('jenis_kegiatan')->nullable();
            $table->string('tempat_kegiatan')->nullable();
            $table->string('juara')->nullable();
            $table->string('tahun')->nullable();
            $table->string('tingkat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ket_prestasis');
    }
};
