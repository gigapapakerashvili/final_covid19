<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('foreign_user_ID');
            $table->foreign('foreign_user_ID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('country');
            $table->bigint('deaths');
            $table->bigint('cases');
            $table->bigint('recovered');
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
        Schema::dropIfExists('covid_data');
    }
}
