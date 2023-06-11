<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear data
        $data = array (
            [
                'nombre' => 'alejandra',
                'created_at' => Carbon::now()
            ],

            [
                'nombre' => 'Erikson',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Mario',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Carlos',
                'created_at' => Carbon::now()
            ],
        );
        
        //almacenar data
        DB::table('empleados')->insert($data);
    }
}
