<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contents')->insert([
            [
                'id'=>1,
                'content'=>'N予備校',
                'color'=>'#0042e5',
            ],
            [
                'id'=>2,
                'content'=>'ドットインストール',
                'color'=>'#0070B9',
            ],
            [
                'id'=>3,
                'content'=>'POSSE課題',
                'color'=>'#01BDDB',
            ],
        ]);
    }
}
