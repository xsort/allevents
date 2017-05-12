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
        Schema::create('news_tags', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('news_id')->unsigned();
            $table->integer('tags_id')->unsigned();
        });
        Schema::table('news_tags', function(Blueprint $table) {
            $table->foreign('news_id')->references('id')->on('news')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('news_tags', function(Blueprint $table) {
            $table->foreign('tags_id')->references('id')->on('tags')
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
        Schema::table('news_tags', function(Blueprint $table) {
            $table->dropForeign('news_tags_news_id_foreign');
        });
        Schema::table('news_tags', function(Blueprint $table) {
            $table->dropForeign('news_tags_tags_id_foreign');
        });
        Schema::drop('news_tags');
    }
}
