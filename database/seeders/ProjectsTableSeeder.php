<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Popolo 10 campi tabella
        for($i = 0; $i < 10; $i++){
            $newProject = new Project();
            $newProject->title = $faker->sentence(2);
            $newProject->description = $faker->text(200);
            $newProject->slug = Str::slug($newProject->title);
            $newProject->save();
        }
    }
}
