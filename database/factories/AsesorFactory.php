<?php

use Faker\Generator as Faker;
use App\Models\Asesor;
$factory->define(Asesor::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'ApellidoP' => $faker->sentence(1,false),
        'ApellidoM' => $faker->sentence(1,false),
        'Direccion' => $faker->sentence(2,false),
        'Ciudad' => $faker->address,
        'Estado' => $faker->address,
        'Colonia' => $faker->sentence(2,false),
        'CP' => $faker->name,
        'RFC' => $faker->name,
        'Escolaridad' => $faker->sentence(1,false),
        'CURP' => $faker->name,
        'Telefono' => $faker->name,
        'FechaNacimiento' => $faker->date,
        'EstadoCivil' => $faker->sentence(1,false),
        'Sexo' => $faker->name,
        'Correo' => $faker->unique()->safeEmail,
        'Contraseña' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        
    ];
});
