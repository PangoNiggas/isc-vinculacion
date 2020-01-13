<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([

             'roles',
             'users',
             'role_user',
             'asesores',   
             'emprendedores',
             'proyectos',
             'fases',
             'ideanegocios',
             'fodas',
             'competencias',
             'cpotenciales',
             'colaboradores',
             'asignaciones',
             'actividades'
             
        ]);
        
           $this->call(RoleSeeders::class);
           $this->call(UsersTableSeeder::class);
           $this->call(AsesorSeeder::class);
           $this->call(EmprendedorSeeder::class);
           $this->call(ProyectoSeeder::class);
           $this->call(FaseSeeder::class);
           $this->call(IdeanegocioSeeder::class);
           $this->call(FodaSeeder::class);
           $this->call(CompetenciaSeeder::class);
           $this->call(CpotencialSeeder::class);
           $this->call(ColaboradorSeeder::class);
           $this->call(AsignacionSeeder::class);
           $this->call(ActividadSeeder::class);
        
    }


    protected function truncateTables(array $tables){

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        
        foreach ($tables as $table) {

            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }

}
