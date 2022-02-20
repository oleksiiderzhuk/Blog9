<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Stringable;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = new Faker;
        $title = $faker->realText(rand(10, 40));
        $short_title = mb_strlen($title)>30 ? mb_substr($title, 0, 30) . '...' : $title;
        $cereated = $faker->fateTimeBetween('-30 days', '-1 days');

        return [
            'title' => $title,
            'short_title' => $short_title,
            'author_id' => rand(1, 4),
            'descr' => $faker->realText(rand(100, 500)),
            'created_at' => $created,
            'updated_at' => $created,
        ];
    }
}
