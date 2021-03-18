<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'book_id' => '1',
            'user_id' => '1',
            'rating' => '3',
            'feedback' => 'Intersting',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '2',
            'user_id' => '3',
            'rating' => '4',
            'feedback' => 'Very Nice',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '1',
            'user_id' => '1',
            'rating' => '3',
            'feedback' => 'Intersting',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '4',
            'user_id' => '2',
            'rating' => '5',
            'feedback' => 'Inspiring',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '3',
            'user_id' => '4',
            'rating' => '4',
            'feedback' => 'Must Read',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '4',
            'user_id' => '3',
            'rating' => '2',
            'feedback' => 'Boring',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '2',
            'user_id' => '2',
            'rating' => '1',
            'feedback' => 'Too Lame',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '4',
            'user_id' => '2',
            'rating' => '5',
            'feedback' => 'Love the story',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'book_id' => '1',
            'user_id' => '1',
            'rating' => '5',
            'feedback' => 'Thrilling',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
