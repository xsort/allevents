<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosXref extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_xref', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('videos_id')->unsigned();
            $table->integer('table_id')->index('idx_table_id');
            $table->string('table', 20)->index('idx_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos_xref');
    }
}
