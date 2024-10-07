<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genes')->insert(
            [
                ['name'=>'hành động'],
                ['name'=>'võ thuật'],
                ['name'=>'kinh dị'],
                ['name'=>'viễn tưởng'],
                ['name'=>'hài']
            ]
            );
    }
}
