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
        Schema::create('ket_prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kegiatan');
            $table->string('tempat_kegiatan');
            $table->string('juara');
            $table->string('tahun');
            $table->string('tingkat');
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
