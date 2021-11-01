<?php

use Illuminate\Database\Seeder;
use App\Alumno;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumno::class,20)->create();
         /*  Alumno::create([
            'id' => '1',
            'name' => 'ander',
            'email' => 'ander200@gmail.com',
            'password' => bcrypt('ander123'),
        ]);  */
    }
}
