<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Proyecto::class, function (Faker $faker) {
    return [
  
        	'Actividad' => $faker->sentence(1,false),
        	'RazonSocial' => $faker->sentence(1,false),
        	'RFC' => $faker->sentence(1,false),
        	'NombreDirector' => $faker->sentence(1,false),
        	'CorreoEmp' => $faker->unique()->safeEmail,
        	'Propuesta' => $faker->name,
        	'Propuestaotra' => $faker->name,
        	'NombreProd' => $faker->name,
        	'Descripcion' =>  $faker->name,
        	'Organizacion' =>  $faker->name,
        	'Cual' =>  $faker->name,
    ];
});
