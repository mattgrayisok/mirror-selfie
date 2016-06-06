<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function(Blueprint $table){
            $table->increments('id');
            $table->string('path')->nullable();
            $table->string('instagram_code');
            $table->string('instagram_id');
            $table->string('link');
            $table->string('username')->nullable();
            $table->integer('votes')->default(0);
            $table->datetime('date');
            $table->timestamps();
            $table->softDeletes();

            $table->unique('instagram_id');
            $table->index('votes');
            $table->index('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
