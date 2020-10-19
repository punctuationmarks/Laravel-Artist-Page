<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arts', function (Blueprint $table) {
            $table->bigIncrements('id');
            // adding the user_id to the table
            // this is the Foreign key, you want it as a unsignedBigInteger just like the primary key
            $table->unsignedBigInteger('user_id');

            $table->string('title')->nullable();
            $table->text('body')->nullable();
            // storing the images as a string path
            $table->string('image');
            $table->string('image_name')->index();
            $table->timestamps();


            // this references all of the articles to the Users model
            // based on the user_id as the foreign key, related in the User model
            // as 'id', and when a user gets deleted, all of their posts get deleted too
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arts');
    }
}
