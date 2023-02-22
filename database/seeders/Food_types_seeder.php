<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Food_types_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['dish', 'addition'];

        foreach ($tags as $c) {
            DB::table('food_types')->insert([
                'name' => $c,
            ]);
        }
    }
}
