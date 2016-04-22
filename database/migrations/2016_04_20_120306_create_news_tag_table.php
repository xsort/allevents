<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tag', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('news_id')->unsigned();
            $table->integer('tag_id')->unsigned();
        });
        Schema::table('news_tag', function(Blueprint $table) {
            $table->foreign('news_id')->references('id')->on('news')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('news_tag', function(Blueprint $table) {
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_tag', function(Blueprint $table) {
            $table->dropForeign('news_tag_post_id_foreign');
        });

        Schema::table('post_tag', function(Blueprint $table) {
            $table->dropForeign('news_tag_tag_id_foreign');
        });
        Schema::drop('news_tag');
    }
}
