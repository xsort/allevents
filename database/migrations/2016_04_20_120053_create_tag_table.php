<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 50)->unique();
            $table->boolean('top');
            $table->string('slug', 200)->index('idx_slug');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags');
    }
}
