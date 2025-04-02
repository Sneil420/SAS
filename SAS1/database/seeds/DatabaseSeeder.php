<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FacultadTableSeeder::class);
        $this->call(EscuelaTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        $this->call(ListaCotejoTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(SemestreTableSeeder::class);
        $this->call(PersonaTableSeeder::class);
        $this->call(PerfilTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
