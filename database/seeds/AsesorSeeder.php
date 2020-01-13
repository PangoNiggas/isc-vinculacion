<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Asesor;
use App\User;
class AsesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*
            $users1 = User::where('name','Aida Guillermina')->value('id');
  
            Asesor::create([
        	'Nombre' => 'Aida Guillermina',
        	'ApellidoP' => 'Cossio',
        	'ApellidoM' => 'Martinez',
        	'Direccion' => 'Carretera Panamericana Kilometro 1080',
        	'Ciudad' => 'Tuxtla Gutierrez',
        	'Estado' => 'Chiapas',
        	'Colonia' => 'Herradura',
        	'CP' => '29050',
        	'RFC' => 'COMA700723',
        	'Escolaridad' => 'Licenciatura',
        	'CURP' => 'COMA700723CSSRD014',
        	'Telefono' => '9616150380',
        	'FechaNacimiento' => '1970-07-23',
        	'EstadoCivil' => 'Soltero(a)',
        	'Sexo' => 'Femenino',
        	'Correo' => 'acossio_m@yahoo.com.mx',   	
        	'Contraseña' => bcrypt('acossio1'),
            'user_id' => $users1,
            
        ]);*/
    }
}
