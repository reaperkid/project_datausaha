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
        Schema::create('kecamatan_desa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatan_id')->nullable()->indexes('fk_kecamatan_desa_to_kecamatan');
            $table->foreignId('desa_id')->nullable()->indexes('fk_kecamatan_desa_to_desa');
            $table->string('nama_kecamatan');
            $table->string('nama_desa');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kecamatan_desa');
    }
};
