<?php

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'apellido' => 'Asencio Ortiz',
            'nombre' => 'Daniel Alexander',
            'correo_institucional' => 'dasencio@unitru.edu.pe',
            'telefono' => '938451004',
            'codigo' => '71342393'
        ]);

        Persona::create([
            'apellido' => 'Rebaza Garcia',
            'nombre' => 'Cristina',
            'correo_institucional' => 'daniel.asencio.ortiz@hotmail.com',
            'telefono' => '938451004',
            'codigo' => '26693626'
        ]);
    }
}
