<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_ratings', function (Blueprint $table) {
            $table->increments('postrating_id');
            $table->integer('post_id')->nullable()->unsigned();
            $table->foreign('post_id')->references('post_id')->on('reporter_posts')->onDelete('cascade');
            $table->string('uemail');
            $table->string('postrating_like');
            $table->integer('postrating_status');
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
        Schema::dropIfExists('post_ratings');
    }
}
