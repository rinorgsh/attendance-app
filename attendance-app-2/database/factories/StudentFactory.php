<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Un nombre 'unique' entre 1000 et 5000
            'id' => $this->faker->unique(true)->numberBetween(1000, 5000),
            // Un prénom aléatoire
            'first_name' => $this->faker->firstName,
            // Un nom aléatoire
            'last_name' => $this->faker->lastName,
        ];
    }
}