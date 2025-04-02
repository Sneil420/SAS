<?php

use Illuminate\Database\Seeder;
use App\Models\Facultad;

class FacultadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //1
        Facultad::create([
            'nombre_facultad' => 'CIENCIAS AGROPECUARIAS'
        ]);
        //2
        Facultad::create([
            'nombre_facultad' => 'CIENCIAS BIOLÓGICAS'
        ]);
        //3
        Facultad::create([
            'nombre_facultad' => 'CIENCIAS ECONÓMICAS'
        ]);
        //4
        Facultad::create([
            'nombre_facultad' => 'CIENCIAS FÍSICAS Y MATEMÁTICAS'
        ]);
        //5
        Facultad::create([
            'nombre_facultad' => 'CIENCIAS SOCIALES'
        ]);
        //6
        Facultad::create([
            'nombre_facultad' => 'DERECHO Y CIENCIAS POLÍTICAS'
        ]);
        //7
        Facultad::create([
            'nombre_facultad' => 'EDUCACIÓN Y CIENCIAS DE LA COMUNICACIÓN'
        ]);
        //8
        Facultad::create([
            'nombre_facultad' => 'ENFERMERÍA'
        ]);
        //9
        Facultad::create([
            'nombre_facultad' => 'FARMACIA Y BIOQUÍMICA'
        ]);
        //10
        Facultad::create([
            'nombre_facultad' => 'INGENIERÍA'
        ]);
        //11
        Facultad::create([
            'nombre_facultad' => 'INGENIERÍA QUÍMICA'
        ]);
        //12
        Facultad::create([
            'nombre_facultad' => 'MEDICINA'
        ]);
        //13
        Facultad::create([
            'nombre_facultad' => 'ESTOMATOLOGÍA'
        ]);
    }
}
