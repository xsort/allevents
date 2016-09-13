<?php

use Illuminate\Database\Seeder;

class AdministratorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => "Administrator",
            'email'          => "yubordeniuk5@mail.ru",
            'password'       => bcrypt('Events120916'),
            'rights'         => 1
        ]);
    }
}
