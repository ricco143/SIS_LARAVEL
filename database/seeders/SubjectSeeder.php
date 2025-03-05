<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Subject::factory(10)->create([
            'code' => fn() => fake()->unique()->word(),
            'name' => fn() => fake()->name(),
            'units' => fn() => fake()->numberBetween(2, 3),
        ]);
    }
}
