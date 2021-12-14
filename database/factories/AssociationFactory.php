<?php

namespace Database\Factories;

use App\Models\Association\Association;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssociationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "nom" => $this->faker->lastName,
            "effectif" => $this->faker->numerify,
            "description" => $this->faker->safari,
            
        ];
    }
}
