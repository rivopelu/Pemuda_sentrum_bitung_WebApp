<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\info>
 */
class InfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'gambar'=> $this->faker->imageUrl(1280, 720, 'animals', true),
            'content' => $this->faker->paragraph(6, 12),
            'tag_id' => $this->faker->numberBetween(1,25), 
            'category_id' =>$this->faker->numberBetween(1,10)
        ];
    }
}
