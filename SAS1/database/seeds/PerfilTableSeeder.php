<?php

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::create([
            'id_persona' => 1,
            'id_departamento' => 1,
            'id_escuela' => 1,
            'id_rol' => 2,
        ]);

        Perfil::create([
            'id_persona' => 2,
            'id_departamento' => 1,
            'id_escuela' => null,
            'id_rol' => 4,
        ]);
    }
}
