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
        Schema::create('usaha_desa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pajak_id')->nullable()->index('fk_usaha_desa_to_pajak');
            $table->foreignId('kecamatan_desa_id')->nullable()->index('fk_usaha_desa_to_kecamatan_desa');
            $table->string('nama_usaha');
            $table->string('alamat_usaha');
            $table->string('nama_pemilik');
            $table->string('hp_pemilik');
            $table->longText('foto');
            $table->enum('status_wajar',['Wajar','Tidak Wajar']);
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
        Schema::dropIfExists('usaha_desa');
    }
};
