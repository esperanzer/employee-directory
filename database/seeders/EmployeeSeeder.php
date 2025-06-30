<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;




class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        // DB::table('employees')->insert([
        //     'name' => 'esperanza',
        //     'email'=> 'espe@gmail.com',
        //     'job_title' => 'Engineer',
        //     'department' => 'Tech',
        //     'created_at' => now(),
        //     'updated_at' => now(),

        // ]);

        DB::table('employees')->insert([
             'name' => 'margret',
            'email'=> 'margie@gmail.com',
            'job_title' => 'Developer',
            'department' => 'Technology',
            'created_at' => now(),
            'updated_at' => now(),


        ]);
    }
}








