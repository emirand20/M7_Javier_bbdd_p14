<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $faker =  Faker::create();

        return [
            'nom' => $faker->unique()->text(50),
            'descripcio' => $faker->paragraph(3),
            'preu-compra' => $faker->randomFloat(2, 100, 1000),
            'preu-venta' => $faker->randomFloat(2, 1100, 2000),
            'enviament_domicili' => $faker->randomElement(['S','N']),
            'stock' => $faker->numberBetween(0, 6000),
            'observations' => $faker->optional()->paragraph(4)
        ];
    }
}
/*$factory->define(Article::class, function (Faker $faker) {
    
    return [
        'name' => $faker->unique()->text(50),
        'descripcio' => $faker->paragraph(3),
        'preu_compra' => $faker->randomFloat(2, 100, 1000),
        'preu_venta' => $faker->randomFloat(2, 1100, 2000),
        'enviamente_domicili' => $faker->randomElement(['S','N']),
        'stock' => $faker->numberBetween(0, 6000),
        'observations' => $faker->optional()->paragraph(4)
    ];
});*/