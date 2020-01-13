<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Role::create([
            
            'name' => 'administrador',
            'display_name' => 'soy administrador',
            'description' => 'administrador'


        ]);
        Role::create([
            
            'name' => 'asesor',
            'display_name' => 'soy asesor',
            'description' => 'Docente'


        ]);
        Role::create([
            
            'name' => 'emprendedor',
            'display_name' => 'soy emprendedor',
            'description' => 'alumno'


        ]);
    }
}
