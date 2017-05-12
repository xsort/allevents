<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       	Schema::create('products_categories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id')->unsigned();
            $table->integer('categories_id')->unsigned();
        });
        Schema::table('products_categories', function(Blueprint $table) {
            $table->foreign('products_id')->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('products_categories', function(Blueprint $table) {
            $table->foreign('categories_id')->references('id')->on('categories')
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
        Schema::table('products_categories', function(Blueprint $table) {
            $table->dropForeign('products_categories_products_id_foreign');
        });

        Schema::table('products_categories', function(Blueprint $table) {
            $table->dropForeign('products_categories_categories_id_foreign');
        });
        Schema::drop('products_categories');
    }
}
