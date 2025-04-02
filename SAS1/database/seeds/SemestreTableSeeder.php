<?php

use Illuminate\Database\Seeder;
use App\Models\Semestre;

class SemestreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semestre::create([
            'periodo' => '2022-I',
            'estado' => true
        ]);
    }
}
