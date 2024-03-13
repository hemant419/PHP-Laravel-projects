<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporterRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporter_registers', function (Blueprint $table) {
            $table->increments('reporter_id');
            $table->string('reporter_name');
            $table->string('email');
            $table->string('password');
            $table->string('reporter_mobile');
            $table->string('reporter_gender');
            $table->string('reporter_image');
            $table->integer('reporter_status');
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
        Schema::dropIfExists('reporter_registers');
    }
}
