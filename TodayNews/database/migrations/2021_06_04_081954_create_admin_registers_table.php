<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_registers', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_name');
            $table->string('email');
            $table->string('password');
            $table->string('admin_image');
            $table->integer('admin_status');
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
        Schema::dropIfExists('admin_registers');
    }
}
