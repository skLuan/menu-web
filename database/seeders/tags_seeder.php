<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Tags_seeder extends Seeder
{
    /**
     * Run the daphptabase seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['vegetarian', 'veggie'];

        foreach ($tags as $c) {
            DB::table('tags')->insert([
                'name' => $c,
            ]);
        }
    }
}
