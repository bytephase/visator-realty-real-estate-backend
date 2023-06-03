<?php

namespace App\Providers;

use Database\Factories\providers\LeadSourceProvider;
use Database\Factories\Providers\LeadStatusProvider;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->extend(Generator::class, function ($faker) {
            $faker->addProvider(new LeadStatusProvider($faker));
            $faker->addProvider(new LeadSourceProvider($faker));
            return $faker;
        });
    }

    public function boot(): void
    {
    }
}
