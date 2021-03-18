<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Love Tips',
            'geners' => 'Romantic',
            'author' => 'Gagan',
            'year' => '2001',
            'author_first_name' => 'Gagan',
            'author_last_name' => 'Preet',
            'birthdate' => '29/06/1994',
            'nationality' => 'indian',
            'image' => 'images/pic02.jpg',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('books')->insert([
            'name' => 'Murder',
            'geners' => 'Thriller',
            'author' => 'David',
            'year' => '2001',
            'author_first_name' => 'David',
            'author_last_name' => 'Chen',
            'birthdate' => '14/08/1984',
            'nationality' => 'Austalian',  
            'image' => 'images/pic02.jpg',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('books')->insert([
            'name' => 'Big Bang Theory',
            'geners' => 'Science',
            'author' => 'Zhe',
            'year' => '2000',
            'author_first_name' => 'Zhe',
            'author_last_name' => 'Wang',
            'birthdate' => '14/08/1984',
            'nationality' => 'Austalian', 
            'image' => 'images/pic02.jpg',   
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('books')->insert([
            'name' => 'Economic War',
            'geners' => 'Bio',
            'author' => 'David',
            'year' => '2005',
            'author_first_name' => 'David',
            'author_last_name' => 'Chen',
            'birthdate' => '14/08/1984',
            'nationality' => 'Austalian',
            'image' => 'images/pic02.jpg',  
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
