<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(Article::class, function (Faker $faker) {
    
    return [
        'name' => $faker->unique()->text(50),
        'descripcio' => $faker->paragraph(3),
        'preu_compra' => $faker->randomFloat(2, 100, 1000),
        'preu_venta' => $faker->randomFloat(2, 1100, 2000),
        'enviamente_domicili' => $faker->randomElement(['S','N']),
        'stock' => $faker->numberBetween(0, 6000),
        'observations' => $faker->optional()->paragraph(4)
    ];
});