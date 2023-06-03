<?php

namespace Database\Factories;
use App\Models\User;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sources = ['whatsapp', 'Facebook', 'Call'];

        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'phone_number' => fake()->phoneNumber,
            'mobile_number' => fake()->phoneNumber,
            'assigned_user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'role_id' => function () {
                return Role::inRandomOrder()->first()->id;
            },
            'source' => fake()->randomElement($sources),
            'next_follow_up' => fake()->dateTimeThisMonth,
            'comment' => fake()->sentence(10),
            'budget' => fake()->randomFloat(2, 0, 999999.99),
            'address' => fake()->address,
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
