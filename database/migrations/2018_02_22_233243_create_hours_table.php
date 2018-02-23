<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->integer('business_id')->unsigned();
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->time('mon_open');
            $table->time('mon_close');
            $table->time('tues_open');
            $table->time('tues_close');
            $table->time('wed_open');
            $table->time('wed_close');
            $table->time('thurs_open');
            $table->time('thurs_close');
            $table->time('fri_open');
            $table->time('fri_close');
            $table->time('sat_open');
            $table->time('sat_close');;
            $table->time('sun_open');
            $table->time('sun_close');
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
        Schema::dropIfExists('hours');
    }
}