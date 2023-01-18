<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {


            $project = new Project;
            $project->name_proj = $faker->words(3, true);
            // $project->type_id = $faker->numberBetween(1, 3);
            $project->slug = Str::slug($project->name_proj, '-');
            $project->description = $faker->paragraph();
            $project->dev_framework = $faker->words(4, true);
            $project->team = $faker->firstName();
            $project->lvl_dif = $faker->numberBetween(1, 10);
            $project->link_git = $faker->url();
            $project->save();
        }
    }
}