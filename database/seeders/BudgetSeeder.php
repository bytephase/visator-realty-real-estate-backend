<?php

namespace Database\Seeders;

use App\Models\Budget;
use Illuminate\Database\Seeder;

class BudgetSeeder extends Seeder
{
    public function run(): void
    {
        $budgets = [
            [
                'min' => 10,
                'max' => 50
            ],
            [
                'min' => 51,
                'max' => 100
            ],
            [
                'min' => 101,
                'max' => 300
            ],
            [
                'min' => 301,
                'max' => 1000
            ],
            [
                'min' => 1001,
                'max' => 2000,
            ],
            [
                'min' => 2001,
                'max' => 5000,
            ],
            [
                'min' => 5001,
                'max' => 10000,
            ],
        ];
        foreach ($budgets as $budget) {
            Budget::updateOrCreate(['min' => $budget['min']], $budget);
        }
    }
}
