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
        Schema::create('npwpd', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pajak_id')->nullable()->index('fk_npwpd_to_pajak');
            $table->foreignId('kd_usaha_id')->nullable()->index('fk_npwpd_to_kd_usaha');
            $table->string('npwpd')->unique();
            $table->string('nik')->unique();
            $table->string('nama_wp');
            $table->longText('alamat_wp');
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
        Schema::dropIfExists('npwpd');
    }
};
