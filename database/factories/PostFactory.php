<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'title' => $this->faker->sentence,
            'thumbnail_img' => $this->faker->imageUrl,
            'description' => $this->faker->paragraphs($nb = 3, $asText = true),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'status' => 'published',
        ];
    }
}
