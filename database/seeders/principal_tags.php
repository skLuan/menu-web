<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class principal_tags extends Seeder
{
    /**
     * Run the daphptabase seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['dish', 'extra', 'vegetarian', 'veggie'];

        foreach ($tags as $c) {
            DB::table('principal_tags')->insert([
                'tag_name' => $c,
            ]);
        }
    }
}
