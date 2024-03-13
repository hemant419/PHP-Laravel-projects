<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('feedback_id');
            $table->integer('post_id')->nullable()->unsigned();
            $table->foreign('post_id')->references('post_id')->on('reporter_posts')->onDelete('cascade');
            $table->string('username');
            $table->string('email');
            $table->string('mobile');
            $table->string('comment');
            $table->integer('feedback_status');
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
        Schema::dropIfExists('feedback');
    }
}
