<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tech_array = ['HTML/CSS', 'JS', 'PHP', 'VueJS', 'Laravel', 'Angular'];

        foreach ($tech_array as $tech) {
            $newTech = new Technology();
            $newTech->project_tech = $tech;
            // restituisce una stringa CSS friendly
            $newTech->description = $faker->safeColorName();
            $newTech->slug = Str::slug($tech);
            $newTech->save();
        }
    }
}
