<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Permiso;
use Faker\Generator as Faker; // es una libreria se puede buscar en GitHub


/**
 * Recordad modificar el permiso en el metodo define Permiso::class
 */

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'slug' => $faker->safeEmail
    ];
});
