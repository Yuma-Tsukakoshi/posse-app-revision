<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('study_hours')->insert([
            ['id'=>1, 'date'=>'2023-03-01','hours'=>8, ],
            ['id'=>2, 'date'=>'2023-03-03','hours'=>9, ],
            ['id'=>3, 'date'=>'2023-03-06','hours'=>4, ],
            ['id'=>4, 'date'=>'2023-03-08','hours'=>8, ],
            ['id'=>5, 'date'=>'2023-03-12','hours'=>7.5, ],
            ['id'=>6, 'date'=>'2023-03-13','hours'=>2.5, ],
            ['id'=>7, 'date'=>'2023-03-14','hours'=>8.5, ],
            ['id'=>8, 'date'=>'2023-03-15','hours'=>2, ],
            ['id'=>9, 'date'=>'2023-03-17','hours'=>6.5, ],
            ['id'=>10, 'date'=>'2023-03-17','hours'=>7.5, ],
            ['id'=>11, 'date'=>'2023-03-19','hours'=>9.5, ],
            ['id'=>12, 'date'=>'2023-03-19','hours'=>7, ],
            ['id'=>13, 'date'=>'2023-03-19','hours'=>1, ],
            ['id'=>14, 'date'=>'2023-03-21','hours'=>6.5, ],
            ['id'=>15, 'date'=>'2023-03-24','hours'=>7.5, ],
            ['id'=>16, 'date'=>'2023-03-25','hours'=>1.5, ],
            ['id'=>17, 'date'=>'2023-03-25','hours'=>9.5, ],
            ['id'=>18, 'date'=>'2023-03-25','hours'=>2, ],
            ['id'=>19, 'date'=>'2023-03-27','hours'=>8.5, ],
            ['id'=>20, 'date'=>'2023-03-28','hours'=>3, ],
        ]);
    }
}
