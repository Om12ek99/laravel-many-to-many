<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tech_array = ['HTML/CSS', 'JS', 'PHP', 'VueJS', 'Laravel', 'Angular'];

        foreach ($tech_array as $tech) {
            $newTech = new Technology();
            $newTech->project_tech = $tech;
            $newTech->slug = Str::slug($tech);
            $newTech->save();
        }
    }
}
