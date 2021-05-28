<?php

namespace Database\Factories;

use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class MangaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomDessinateur' => $this->faker->lastName,
            'nomScenariste' => $this->faker->lastName,
            'genre' => $this->faker->sentence(1,false),
            'prix' => $this->faker->randomFloat(2,0,50),
            'titre' => $this->faker->sentence(3,true),
            'couverture' => $this->faker->sentence(1,false) .'JPG',
        ];
    }
}
