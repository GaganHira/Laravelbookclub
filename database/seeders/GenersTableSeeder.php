<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geners')->insert([
            'name' => 'Thriller',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('geners')->insert([
            'name' => 'Romance',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('geners')->insert([
            'name' => 'Sceince',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('geners')->insert([
            'name' => 'Documentary',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
