<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreacodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areacodes', function (Blueprint $table) {
            $table->id();
            $table->string('areacode'); //pishshomare exp:3628,3434,3572
            $table->string('code');  //Province Codes exp: 031,021,011
            $table->bigInteger('city_id');
            $table->bigInteger('province_id');
            $table->bigInteger('telecom_center_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areacodes');
    }
}
