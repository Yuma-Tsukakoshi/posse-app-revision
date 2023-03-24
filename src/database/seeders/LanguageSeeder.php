<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('languages')->insert([
            [
                'id'=>1,
                'language'=>'HTML',
                'color'=>'#0042e5',
            ],
            [
                'id'=>2,
                'language'=>'CSS',
                'color'=>'#0070B9',
            ],
            [
                'id'=>3,
                'language'=>'JavaScript',
                'color'=>'#01BDDB',
            ],
            [
                'id'=>4,
                'language'=>'PHP',
                'color'=>'#02CDFA',
            ],
            [
                'id'=>5,
                'language'=>'Laravel',
                'color'=>'#B29DEE',
            ],
            [
                'id'=>6,
                'language'=>'SQL',
                'color'=>'#6C43E5',
            ],
            [
                'id'=>7,
                'language'=>'SHELL',
                'color'=>'#460AE8',
            ],
            [
                'id'=>8,
                'language'=>'情報システム基礎知識(その他)',
                'color'=>'#2C00B9',
            ]
        ]);
    }
}
