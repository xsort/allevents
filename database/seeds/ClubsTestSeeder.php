<?php

use Illuminate\Database\Seeder;

class ClubsTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'slug'          => "drive-club",
            'name'          => "Клуб Drive",
        ]);
  
    }
}
