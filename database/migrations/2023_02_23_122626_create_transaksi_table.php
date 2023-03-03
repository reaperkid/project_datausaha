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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_desa_id')->nullable()->index('fk_transaksi_to_usaha_desa');
            $table->foreignId('npwpd_id')->nullable()->index('fk_transaksi_to_npwpd');
            $table->foreignId('kobil_id')->nullable()->index('fk_transaksi_to_kobil');
            $table->integer('nilai_dipungut');
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
        Schema::dropIfExists('transaksi');
    }
};
