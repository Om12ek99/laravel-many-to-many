<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['backend', 'frontend','fullstack'];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->project_type = $type;
            $newType->save() ;
        }

    }
}
