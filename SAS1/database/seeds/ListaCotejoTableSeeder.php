<?php

use Illuminate\Database\Seeder;
use App\Models\ListaCotejo;

class ListaCotejoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListaCotejo::create([
            'item' => 'Logo UNT',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Facultad',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Departamento',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'I. DATOS DE IDENTIFICACIÓN' ,
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Área académica',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Facultad',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Programa de estudios/carrera profesional',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Sede / filial',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Año y semestre académico',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Ciclo',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Código de la asignatura',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Sección (es) Grupo (s)',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Créditos',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Pre requisito',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Inicio - Término',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Tipo (obligatorio / electivo)',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Organización semestral del tiempo (semanas)',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Actividades',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Docentes / equipo docente',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'II. SUMILLA:',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Extrae y transcribe del plan curricular, considerando área curricular, naturaleza, propósito y contenidos (unidades didácticas)',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'III. COMPETENCIAS',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Se transcribe del perfil de egreso (general y/o específicas). del plan curricular',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'IV. PROGRAMACIÓN ACADÉMICA',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => '1. CAPACIDADES',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Son aquellas que se transcriben del perfil de egreso',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => '2. RESULTADOS DE APRENDIZAJE',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Son enunciados que expresan lo que se espera del estudiante que sea capaz de conocer, comprender y hacer al final de una unidad de aprendizaje.',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => '3. CONTENIDOS',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'La organización de los contenidos tiene una secuencia lógica.',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Los contenidos tienen coherencia y permiten el logro de los resultados de aprendizaje en cada unidad. Excepcionalmente, según mapeo curricular considera actividades de responsabilidad social y/o investigación formativa.',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);

        ListaCotejo::create([
            'item' => '4. ESTRATEGIAS DE ENSEÑANZA- APRENDIZAJE',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Selecciona métodos, técnicas, procedimientos y recursos virtuales que se ejecutan en el inicio, desarrollo y cierre de la clase, para el logro del aprendizaje del estudiante',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Las estrategias didácticas seleccionadas fomentan diversas modalidades de interacción (trabajo individual y / grupal).',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Especifica si las actividades son sincrónicas y/o asincrónicas',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Considera la elaboración de por lo menos 3 objetos virtuales de aprendizaje (OVA), adecuados  y pertinentes por cada unidad de aprendizaje',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => '5. EVIDENCIAS DE APRENDIZAJE',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Son los productos académicos que evidencian en forma objetiva el resultado de aprendizaje como ensayo, infografía, monografía, organizador visual, video gravado, exposiciones de los estudiantes, portafolio digital etc...',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => '6. INSTRUMENTOS DE  EVALUACIÓN',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Considera instrumentos para obtener evidencias de resultados de aprendizaje, responsabilidad social, investigación formativa como rúbricas, lista de cotejo, lista de calificación, cuestionarios, u otro',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Considera la evaluación de proceso: Participación en foros, chats y otros',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Considera la autoevaluación, también incluye coevaluación y heteroevaluación',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => '7. NÚMERO DE SEMANA',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Indica el número de semana de las sesiones programadas.',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => '8. SISTEMA DE EVALUACIÓN',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Considera procedimientos de evaluación y criterios de promoción',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => '9. TUTORÍA/ORIENTACIÓN',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Consigna el propósito, día, medio virtual, y horario',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'V. REFERENCIAS',
            'tipo' => 'titulo',
            'color_fondo' => '#6DCDF4'
        ]);
        ListaCotejo::create([
            'item' => 'Las referencias están actualizadas y algunas se encuentran en la biblioteca virtual de la universidad.',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Al citar las hace teniendo en cuenta alguna normativa internacional: APA, Vancouver, etc.',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
        ListaCotejo::create([
            'item' => 'Incorpora base de datos de PROQUEST.',
            'tipo' => 'item',
            'color_fondo' => '#FFFFFF'
        ]);
    }
}
