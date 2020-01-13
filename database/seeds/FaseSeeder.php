<?php

use Illuminate\Database\Seeder;
use App\Models\Fase;


class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fase::create([

        'NombreFase' => 'Resumen Ejecutivo',
        'Estado' => 'En curso',
        'FechaTerm' => '2018-12-12',
       

        ]);

        Fase::create([

        'NombreFase' => 'Mercado',
        'Estado' => 'Aprovado',
        'FechaTerm' => '2018-12-12',
       

        ]);

        Fase::create([

        'NombreFase' => 'Tecnico',
        'Estado' => 'Reprovado',
        'FechaTerm' => '2018-12-12',
       

        ]);
        Fase::create([

            'NombreFase' => 'Diseño Organizacinal, Marco Legal y Fiscal',
            'Estado' => 'Reprovado',
            'FechaTerm' => '2018-12-12',
           
    
        ]);
        Fase::create([

                'NombreFase' => 'Estudio Financiero',
                'Estado' => 'Reprovado',
                'FechaTerm' => '2018-12-12',
               
        
        ]);
    }
}
