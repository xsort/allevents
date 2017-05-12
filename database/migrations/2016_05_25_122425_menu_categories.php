<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_categories', function($t){
			$t->increments('id');
			$t->string('name', 200);
			$t->string('name_ro', 200);
			$t->string('name_en', 200);
			$t->text('description');
			$t->text('description_ro');
			$t->text('description_en');
			$t->text('description_short');
			$t->text('description_short_ro');
			$t->text('description_short_en');
			$t->tinyInteger('parent_id');
			$t->boolean('enabled')->default(true);
            $t->integer('views');
            $t->integer('sort');
            $t->string('slug', 200)->index('idx_slug');
			$t->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu_categories');
    }
}
