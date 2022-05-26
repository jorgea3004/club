<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\members>
 */
class MembersFactory extends Factory
{
    protected $model = Members::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'last_name' => $this->faker->sentence(),
            'phone' => $this->faker->sentence(),
            'date_born' => $this->faker->sentence(),
            'idcity' => $this->faker->randomElement(1,2,3,4,5,6,7,8,9),
        ];
    }
}
