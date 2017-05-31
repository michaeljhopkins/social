<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('username_id');
            $table->unsignedInteger('network_id');
            $table->unsignedInteger('contact_id');
            $table->text('content');
            $table->string('permalink');
            $table->softDeletes();
            $table->timestamps();

	        $table->foreign('username_id')->references('id')->on('usernames')->onDelete('cascade');
	        $table->foreign('network_id')->references('id')->on('networks')->onDelete('cascade');
	        $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
