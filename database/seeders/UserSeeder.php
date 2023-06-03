<?php

namespace Database\Seeders;

use App\Models\Budget;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            User::factory(['email' => 'ganeshghalme31@gmail.com', 'name' => 'Ganesh', 'password' => Hash::make('magic123')])->make(),
            User::factory(['email' => 'vishwajitsayambar@gmail.com', 'name' => 'Vishwajit', 'password' => Hash::make('magic123')])->make(),
        ];
        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user->toArray());
        }

    }
}
