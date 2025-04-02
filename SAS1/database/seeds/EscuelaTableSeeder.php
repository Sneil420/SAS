<?php

use Illuminate\Database\Seeder;
use App\Models\Escuela;

class EscuelaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuela::create([
            'nombre_escuela' => 'AGRONOMÍA',
            'id_facultad' => 1
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA AGRÍCOLA',
            'id_facultad' => 1
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA AGROINDUSTRIAL',
            'id_facultad' => 1
        ]);
        Escuela::create([
            'nombre_escuela' => 'ZOOTECNIA',
            'id_facultad' => 1
        ]);
        Escuela::create([
            'nombre_escuela' => 'MICROBIOLOGÍA Y PARASITOLOGÍA',
            'id_facultad' => 2
        ]);
        Escuela::create([
            'nombre_escuela' => 'CIENCIAS BIOLÓGICAS',
            'id_facultad' => 2
        ]);
        Escuela::create([
            'nombre_escuela' => 'BIOLOGÍA PESQUERA',
            'id_facultad' => 2
        ]);
        Escuela::create([
            'nombre_escuela' => 'ECONOMÍA',
            'id_facultad' => 3
        ]);
        Escuela::create([
            'nombre_escuela' => 'ADMINISTRACIÓN',
            'id_facultad' => 3
        ]);
        Escuela::create([
            'nombre_escuela' => 'CONTABILIDAD Y FINANZAS',
            'id_facultad' => 3
        ]);
        Escuela::create([
            'nombre_escuela' => 'ESTADÍSTICA',
            'id_facultad' => 4
        ]);
        Escuela::create([
            'nombre_escuela' => 'INFORMÁTICA',
            'id_facultad' => 4
        ]);
        Escuela::create([
            'nombre_escuela' => 'MATEMÁTICAS',
            'id_facultad' => 4
        ]);
        Escuela::create([
            'nombre_escuela' => 'FÍSICA',
            'id_facultad' => 4
        ]);
        Escuela::create([
            'nombre_escuela' => 'TRABAJO SOCIAL',
            'id_facultad' => 5
        ]);
        Escuela::create([
            'nombre_escuela' => 'HISTORIA',
            'id_facultad' => 5
        ]);
        Escuela::create([
            'nombre_escuela' => 'TURISMO',
            'id_facultad' => 5
        ]);
        Escuela::create([
            'nombre_escuela' => 'ANTROPOLOGÍA',
            'id_facultad' => 5
        ]);
        Escuela::create([
            'nombre_escuela' => 'ARQUEOLOGÍA',
            'id_facultad' => 5
        ]);
        Escuela::create([
            'nombre_escuela' => 'DERECHO',
            'id_facultad' => 6
        ]);
        Escuela::create([
            'nombre_escuela' => 'CIENCIA POLÍTICA Y GOBERNABILIDAD',
            'id_facultad' => 6
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN INICIAL',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN PRIMARIA',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN SECUNDARIA, MENCIÓN EN: CIENCIAS MATEMÁTICAS',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN SECUNDARIA, MENCIÓN EN: CIENCIAS NATURALES: FÍSICA, QUÍMICA Y BIOLOGÍA',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN SECUNDARIA, MENCIÓN EN: FILOSOFÍA, PSICOLOGÍA Y CIENCIAS SOCIALES',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN SECUNDARIA, MENCIÓN EN: HISTORIA Y GEOGRAFÍA',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN SECUNDARIA, MENCIÓN EN: IDIOMAS',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'EDUCACIÓN SECUNDARIA, MENCIÓN EN: LENGUA Y LITERATURA',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'CIENCIAS DE LA COMUNICACIÓN',
            'id_facultad' => 7
        ]);
        Escuela::create([
            'nombre_escuela' => 'ENFERMERÍA',
            'id_facultad' => 8
        ]);
        Escuela::create([
            'nombre_escuela' => 'FARMACIA Y BIOQUÍMICA',
            'id_facultad' => 9
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA DE MINAS',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA METALÚRGICA',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA DE MATERIALES',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA DE SISTEMAS',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA INDUSTRIAL',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA MECÁNICA',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA MECATRÓNICA',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA CIVIL',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'ARQUITECTURA Y URBANISMO',
            'id_facultad' => 10
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA QUÍMICA',
            'id_facultad' => 11
        ]);
        Escuela::create([
            'nombre_escuela' => 'INGENIERÍA AMBIENTAL',
            'id_facultad' => 11
        ]);
        Escuela::create([
            'nombre_escuela' => 'MEDICINA',
            'id_facultad' => 12
        ]);
        Escuela::create([
            'nombre_escuela' => 'ESTOMATOLOGÍA',
            'id_facultad' => 13
        ]);
    }
    
}
