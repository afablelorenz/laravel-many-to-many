<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $types = Type::all()->pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'type_id' => $faker->randomElement($types),
            ]);
        }
    }
}
