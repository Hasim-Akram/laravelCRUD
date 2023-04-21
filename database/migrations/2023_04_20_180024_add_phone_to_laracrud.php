<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneToLaracrud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lara_c_r_u_d_s', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->integer('phone')->nulllable->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lara_c_r_u_d_s', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->dropColumn('phone');
        });
    }
}
