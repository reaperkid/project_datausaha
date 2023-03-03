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
        Schema::create('detil_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_detil_user_to_users');
            $table->foreignId('type_user_id')->nullable()->index('fk_detil_user_to_type_user');
            $table->string('HP');
            $table->longText('alamat')->nullable();
            $table->longText('foto')->nullable();
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
        Schema::dropIfExists('detil_user');
    }
};
