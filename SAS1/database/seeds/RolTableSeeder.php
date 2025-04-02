<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'rol' => 'admin',
            'descripcion' => 'Control del sistema'
        ]);

        Rol::create([
            'rol' => 'director_escuela',
            'descripcion' => 'Director de escuela'
        ]);

        Rol::create([
            'rol' => 'director_departamento',
            'descripcion' => 'Director de Departamento'
        ]);

        Rol::create([
            'rol' => 'docente',
            'descripcion' => 'Docente UNT'
        ]);
    }
}
