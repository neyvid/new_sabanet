<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPasswordReset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('password_resets', function (Blueprint $table) {
            $table->string('mobile')->after('email')->nullable();
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('password_resets', function (Blueprint $table) {
            $table->dropColumn('mobile');


        });
    }
}
