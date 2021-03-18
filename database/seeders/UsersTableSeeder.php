<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'Admin@a.org',
            'type'=>'Administator',
            'status'=>'N/A',   
            'password'=> bcrypt('1234'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ]);
        DB::table('users')->insert([
            'name'=>'Cris',
            'email'=>'Cris@a.org',
            'type'=>'Curator',
            'status'=>'Approved',   
            'password'=> bcrypt('1234'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ]);
        DB::table('users')->insert([
            'name'=>'Chloe',
            'email'=>'Chloe@a.org',
            'type'=>'Curator',
            'status'=>'Waiting for approval',   
            'password'=> bcrypt('1234'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ]);
        DB::table('users')->insert([
            'name'=>'Cara',
            'email'=>'Cara@a.org',
            'type'=>'Curator',
            'status'=>'Waiting for approval',   
            'password'=> bcrypt('1234'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ]);
        DB::table('users')->insert([
            'name'=>'Bob',
            'email'=>'Bob@a.org',
            'type'=>'Member',
            'status'=>'N/A',            
            'password'=> bcrypt('1234'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ]);
        DB::table('users')->insert([
            'name'=>'Fred',
            'email'=>'Fred@gmail.com',
            'type'=>'Member',
            'status'=>'N/A',   
            'password'=> bcrypt('1234'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ]);
    }
}
