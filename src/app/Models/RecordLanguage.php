<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RecordLanguage extends Model
{
    use HasFactory;
    public function record_language()
    {
        return $this;
    }
    public function GetRecordLanguage(){
        $origin2 = $this 
        ->selectRaw('origin2.record_id')
        ->selectRaw('COUNT(record_id) AS record_count')
        ->from('record_languages AS origin2')
        ->groupBy('record_id');

        $language_data = $this
        ->selectRaw('languages.language AS name')
        ->selectRaw('ROUND(SUM(study_hours.hours/record_count),1) AS hours')
        ->selectRaw('languages.color')
        ->from('record_languages AS origin1')
        ->join('languages', function($join) {
            $join->on('origin1.language_id', '=', 'languages.id');
        })
        ->leftJoin(DB::raw("({$origin2->toSql()}) AS origin2"), function($join) {
            $join->on('origin1.record_id', '=', 'origin2.record_id');
            // origin2.record_id = origin1.record_id だとできなかった
        })
        ->leftJoin('study_hours', function($join) {
            $join->on('origin1.record_id', '=', 'study_hours.id');
        })
        ->groupBy('origin1.language_id')
        ->get();
        return $language_data;
    }
}
