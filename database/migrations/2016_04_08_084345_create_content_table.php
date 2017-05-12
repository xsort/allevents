<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function($t){
            $t->increments('id');
            $t->string('name', 200);
            $t->string('name_en', 200);
            $t->string('name_ro', 200);
            $t->text('description');
            $t->text('description_en');
            $t->text('description_ro');
            $t->boolean('enabled')->default(true);
            $t->integer('views');
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
        Schema::drop('content');
    }
}
