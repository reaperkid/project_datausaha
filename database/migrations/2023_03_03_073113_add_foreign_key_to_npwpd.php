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
        Schema::table('npwpd', function (Blueprint $table) {
            $table->foreign('pajak_id','fk_npwpd_to_pajak')->references('id')->on('pajak')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('kd_usaha_id','fk_npwpd_to_kd_usaha')->references('id')->on('kd_usaha')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('npwpd', function (Blueprint $table) {
            $table->dropForeign('fk_npwpd_to_pajak');
            $table->dropForeign('fk_npwpd_to_kd_usaha');
        });
    }
};
