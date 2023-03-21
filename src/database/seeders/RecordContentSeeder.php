<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('record_contents')->insert([
            ['id'=> 1,'record_id'=>1,'content_id'=>1,],
            ['id'=> 2,'record_id'=>1,'content_id'=>3,],
            ['id'=> 3,'record_id'=>2,'content_id'=>1,],
            ['id'=> 4,'record_id'=>3,'content_id'=>2,],
            ['id'=> 5,'record_id'=>3,'content_id'=>1,],
            ['id'=> 6,'record_id'=>4,'content_id'=>3,],
            ['id'=> 7,'record_id'=>5,'content_id'=>3,],
            ['id'=> 8,'record_id'=>6,'content_id'=>3,],
            ['id'=> 9,'record_id'=>7,'content_id'=>3,],
            ['id'=> 10,'record_id'=>7,'content_id'=>2,],
            ['id'=> 11,'record_id'=>7,'content_id'=>1,],
            ['id'=> 12,'record_id'=>8,'content_id'=>3,],
            ['id'=> 13,'record_id'=>9,'content_id'=>3,],
            ['id'=> 14,'record_id'=>10,'content_id'=>1,],
            ['id'=> 15,'record_id'=>10,'content_id'=>2,],
            ['id'=> 16,'record_id'=>11,'content_id'=>2,],
            ['id'=> 17,'record_id'=>12,'content_id'=>3,],
            ['id'=> 18,'record_id'=>13,'content_id'=>1,],
            ['id'=> 19,'record_id'=>13,'content_id'=>3,],
            ['id'=> 20,'record_id'=>14,'content_id'=>1,],
            ['id'=> 21,'record_id'=>15,'content_id'=>2,],
            ['id'=> 22,'record_id'=>15,'content_id'=>1,],
            ['id'=> 23,'record_id'=>16,'content_id'=>3,],
            ['id'=> 24,'record_id'=>17,'content_id'=>3,],
            ['id'=> 25,'record_id'=>18,'content_id'=>1,],
            ['id'=> 26,'record_id'=>18,'content_id'=>2,],
            ['id'=> 27,'record_id'=>19,'content_id'=>2,],
            ['id'=> 28,'record_id'=>19,'content_id'=>3,],
            ['id'=> 29,'record_id'=>19,'content_id'=>1,],
            ['id'=> 30,'record_id'=>20,'content_id'=>3,],
        ]);
    }
}
