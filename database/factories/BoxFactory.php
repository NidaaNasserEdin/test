<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Box>
 */
class BoxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'user_id' => null,
        // 'area_id' => rand(1,5),
        // 'area_id' => Area::inRandomOrder()->limit(1)->first()->id,
        ];
    }
}
