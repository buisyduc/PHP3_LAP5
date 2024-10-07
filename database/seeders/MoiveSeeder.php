<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<50; $i++){
            DB::table('moives')->insert([
                'title' => fake()->text(30),
                'poster' => fake()->imageUrl(),
                'intro' => fake()->paragraph(),
                'release_date' => fake()->date(),
                'gene_id' => rand(1, 5)
            ]);

        }
    }
}
