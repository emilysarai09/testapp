<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Emily Madrid',
                'email' => 'emilysarai45@gmail.com',
                'password' => bcrypt('admin'),
            ],

            [
                'name' => 'Jose Caballero',
                'email' => 'jcaballero2804@outlook.com',
                'password' => bcrypt('admin'),
            ],

            [
                'name' => 'Aracelys Alvarenga',
                'email' => 'aranays@hotmail.com',
                'password' => bcrypt('admin'),
            ],


        ]);
    }
}
