<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'description'=>$this->faker->sentence($nbWords = 20, $variableNbWords = true),
            'user_id'=>User::factory()
        ];
    }
}