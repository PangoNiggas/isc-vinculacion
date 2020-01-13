<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Emprendedor::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'ApellidoP' => $faker->sentence(1,false),
        'ApellidoM' => $faker->sentence(1,false),
        'FechaNaci' => $faker->date,
        'Edad' => $faker->name,
        'Sexo' => $faker->name,
        'EstadoCivil' => $faker->sentence(2,false),
        'NumeroExterior' => $faker->name,
        'NumeroInterior' => $faker->name,
        'Colonia' => $faker->address,
        'Ciudad' => $faker->address,
        'Municipio' => $faker->address,
        'CodigoPostal' => $faker->name,
        'Direccion' => $faker->address,
        'TelefonoCel' => $faker->name,
        'TelefonoOfi' => $faker->name,
        'TelefonoCasa' => $faker->name,
        'Correo' => $faker->unique()->safeEmail,
        'Escolaridad' => $faker->sentence(2,false),
        'TipoPersona' => $faker->name,
        'CURP' => $faker->name,
        'INE' => $faker->name,
        'RFC' => $faker->name,
        'RFCM' => $faker->name,
        'RazonSocial' => $faker->name,
        'ObjetivoSocial' => $faker->name,
        'TipoEmpresa' => $faker->name,
        'TipoOtra' => $faker->name,
    ];
});
