<?php

use App\Cursos;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cursos::class,20)->create();
         /*  Alumno::create([
            'id' => '1',
            'name' => 'ander',
            'email' => 'ander200@gmail.com',
            'password' => bcrypt('ander123'),
        ]);  */
    }
}
