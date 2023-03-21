<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('record_languages')->insert([
            [ 'id'=> 1,'record_id'=>1,'language_id'=>1,],
            [ 'id'=> 2,'record_id'=>1,'language_id'=>3,],
            [ 'id'=> 3,'record_id'=>2,'language_id'=>1,],
            [ 'id'=> 4,'record_id'=>2,'language_id'=>2,],
            [ 'id'=> 5,'record_id'=>2,'language_id'=>6,],
            [ 'id'=> 6,'record_id'=>3,'language_id'=>6,],
            [ 'id'=> 7,'record_id'=>3,'language_id'=>4,],
            [ 'id'=> 8,'record_id'=>4,'language_id'=>4,],
            [ 'id'=> 9,'record_id'=>4,'language_id'=>3,],
            [ 'id'=> 10,'record_id'=>4,'language_id'=>2,],
            [ 'id'=> 11,'record_id'=>5,'language_id'=>6,],
            [ 'id'=> 12,'record_id'=>6,'language_id'=>6,],
            [ 'id'=> 13,'record_id'=>7,'language_id'=>3,],
            [ 'id'=> 14,'record_id'=>8,'language_id'=>2,],
            [ 'id'=> 15,'record_id'=>8,'language_id'=>3,],
            [ 'id'=> 16,'record_id'=>9,'language_id'=>2,],
            [ 'id'=> 17,'record_id'=>9,'language_id'=>4,],
            [ 'id'=> 18,'record_id'=>10,'language_id'=>6,],
            [ 'id'=> 19,'record_id'=>11,'language_id'=>5,],
            [ 'id'=> 20,'record_id'=>12,'language_id'=>1,],
            [ 'id'=> 21,'record_id'=>13,'language_id'=>1,],
            [ 'id'=> 22,'record_id'=>13,'language_id'=>3,],
            [ 'id'=> 23,'record_id'=>14,'language_id'=>1,],
            [ 'id'=> 24,'record_id'=>14,'language_id'=>2,],
            [ 'id'=> 25,'record_id'=>14,'language_id'=>6,],
            [ 'id'=> 26,'record_id'=>15,'language_id'=>6,],
            [ 'id'=> 27,'record_id'=>15,'language_id'=>4,],
            [ 'id'=> 28,'record_id'=>16,'language_id'=>4,],
            [ 'id'=> 29,'record_id'=>16,'language_id'=>3,],
            [ 'id'=> 30,'record_id'=>16,'language_id'=>2,],
            [ 'id'=> 31,'record_id'=>17,'language_id'=>6,],
            [ 'id'=> 32,'record_id'=>18,'language_id'=>6,],
            [ 'id'=> 33,'record_id'=>18,'language_id'=>3,],
            [ 'id'=> 34,'record_id'=>18,'language_id'=>2,],
            [ 'id'=> 35,'record_id'=>18,'language_id'=>3,],
            [ 'id'=> 36,'record_id'=>19,'language_id'=>2,],
            [ 'id'=> 37,'record_id'=>19,'language_id'=>4,],
            [ 'id'=> 38,'record_id'=>19,'language_id'=>6,],
            [ 'id'=> 39,'record_id'=>20,'language_id'=>5,],
            [ 'id'=> 40,'record_id'=>20,'language_id'=>1,],
        ]);
    }
}
