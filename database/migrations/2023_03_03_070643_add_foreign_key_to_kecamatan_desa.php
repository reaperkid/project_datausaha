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
        Schema::table('kecamatan_desa', function (Blueprint $table) {
            $table->foreign('kecamatan_id','fk_kecamatan_desa_to_kecamatan')->references('id')->on('kecamatan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('desa_id','fk_kecamatan_desa_to_desa')->references('id')->on('desa')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kecamatan_desa', function (Blueprint $table) {
            $table->dropForeign('fk_kecamatan_desa_to_kecamatan');
            $table->dropForeign('fk_kecamatan_desa_to_desa');
        });
    }
};
