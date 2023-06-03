<?php

namespace Database\Factories;

use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;

class BudgetFactory extends Factory
{
    protected $model = Budget::class;

    public function definition(): array
    {
        $min = $this->faker->numberBetween(10, 5000);
        $max = $this->faker->numberBetween($min, 10000);

        return [
            'min' => $min,
            'max' => $max,
        ];
    }
}
