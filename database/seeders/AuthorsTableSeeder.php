<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'first_name' => 'Gagan',
            'last_name' => 'Preet',
            'birthdate' => '29/06/1994',
            'nationality' => 'indian',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('authors')->insert([
            'first_name' => 'David',
            'last_name' => 'Chen',
            'birthdate' => '14/08/1984',
            'nationality' => 'Austalian',      
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            
        ]);
        DB::table('authors')->insert([
            'first_name' => 'Hira',
            'last_name' => 'Singh',
            'birthdate' => '14/08/1984',
            'nationality' => 'Austalian',      
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('authors')->insert([
            'first_name' => 'Zhe',
            'last_name' => 'Wang',
            'birthdate' => '14/08/1984',
            'nationality' => 'Austalian',      
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
