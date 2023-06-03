<?php

namespace Database\Factories;

use App\Models\Budget;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    protected $model = Lead::class;

    public function definition(): array
    {
        return [
            'name'           => $this->faker->name(),
            'email'          => $this->faker->unique()->safeEmail(),
            'mobile_number'  => $this->faker->phoneNumber(),
            'phone_number'   => $this->faker->phoneNumber(),
            'assigned_to'    => function () {
                return User::inRandomOrder()->first();
            },
            'created_by'     => function () {
                return User::inRandomOrder()->first();
            },
            'source'         => $this->faker->leadSource(),
            'status'         => $this->faker->leadStatus(),
            'next_follow_up' => $this->faker->dateTime,
            'comment'        => $this->faker->sentence(10),
            'budget_id'      => function () {
                return Budget::inRandomOrder()->first();
            },
            'priority'       => $this->faker->word(),
        ];
    }
}
