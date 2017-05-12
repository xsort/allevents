<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsLinksTable extends Migration
{
    /**
     * Run temp migrations.
     *
     * php artisan migrate --path=database/migrations/temp
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function(Blueprint $t) {
            $t->increments('id');
            $t->string('name', 200);
            $t->string('name_ro', 200);
            $t->string('name_en', 200);
            $t->text('description_short');
            $t->text('description_short_ro');
            $t->text('description_short_en');
            $t->string('link', 200);
            $t->boolean('blank');
            $t->integer('product_id')->index();
        });

        Schema::create('products_links', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('link_id')->unsigned();
            $table->boolean('disabled');
            $table->integer('sort');
            $table->text('type');
        });

        Schema::table('products_links', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('products_links', function(Blueprint $table) {
            $table->foreign('link_id')->references('id')->on('links')
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
        Schema::drop('products_links');
        Schema::drop('links');
    }
}
