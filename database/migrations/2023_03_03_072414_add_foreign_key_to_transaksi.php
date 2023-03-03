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
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('usaha_desa_id','fk_transaksi_to_usaha_desa')->references('id')->on('usaha_desa')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('npwpd_id','fk_transaksi_to_npwpd')->references('id')->on('npwpd')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('kobil_id','fk_transaksi_to_kobil')->references('id')->on('kobil')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('fk_transaksi_to_usaha_desa');
            $table->foreign('fk_transaksi_to_npwpd');
            $table->foreign('fk_transaksi_to_kobil');
        });
    }
};
