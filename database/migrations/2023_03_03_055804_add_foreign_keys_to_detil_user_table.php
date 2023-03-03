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
        Schema::table('detil_user', function (Blueprint $table) {
            $table->foreign('user_id','fk_detil_user_to_users')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('type_user_id','fk_detil_user_to_type_user')->references('id')->on('type_user')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detil_user', function (Blueprint $table) {
            $table->dropForeign('fk_detil_user_to_users');
            $table->dropForeign('fk_detil_user_to_type_user');
        });
    }
};
