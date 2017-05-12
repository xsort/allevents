<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesXref extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_xref', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->index('idx_parent_id');
            $table->integer('child_id')->index('idx_child_id');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  
        Schema::drop('categories_xref');
    }
}
