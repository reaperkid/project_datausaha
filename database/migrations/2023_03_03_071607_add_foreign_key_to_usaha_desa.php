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
        Schema::table('usaha_desa', function (Blueprint $table) {
            $table->foreign('pajak_id','fk_usaha_desa_to_pajak')->references('id')->on('pajak')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('kecamatan_desa_id','fk_usaha_desa_to_kecamatan_desa')->references('id')->on('kecamatan_desa')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usaha_desa', function (Blueprint $table) {
            $table->dropForeign('fk_usaha_desa_to_pajak');
            $table->dropForeign('fk_usaha_desa_to_kecamatan_desa');
        });
    }
};
