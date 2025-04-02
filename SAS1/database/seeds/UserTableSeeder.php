<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel Asencio',
            'email' => 'dasencio@unitru.edu.pe',
            'password' => bcrypt('nsyydkhw'),
            'id_perfil' => 1
        ]);

        User::create([
            'name' => 'Cristina Rebaza',
            'email' => 'daniel.asencio.ortiz@hotmail.com',
            'password' => bcrypt('nsyydkhw'),
            'id_perfil' => 2
        ]);
    }
}
