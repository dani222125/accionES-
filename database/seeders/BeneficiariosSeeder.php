<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeneficiariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                'nombre' => 'Erikson',
                'apellido' => 'Polanco',
                'edad'    => 27,
                'telefono' => 7788-9900,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'Baires',
                'edad'    => 26,
                'telefono' => 7268-9201,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Mario',
                'apellido' => 'Amaya',
                'edad'    => 24,
                'telefono' => 7348-2009,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Alejandra',
                'apellido' => 'Perez',
                'edad'    => 23,
                'telefono' => 7168-4960,
                'created_at' => Carbon::now()
            ],

        );

        //almacenar data
        DB::table('beneficios')->insert($data);
    }
}
