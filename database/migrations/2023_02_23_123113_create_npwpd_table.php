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
            $table->integer('pajak_id');
            $table->integer('kd_usaha_id');
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
