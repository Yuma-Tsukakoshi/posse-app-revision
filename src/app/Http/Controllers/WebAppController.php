<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Language;
use App\Models\RecordContent;
use App\Models\RecordLanguage;
use App\Models\StudyHour;
use Database\Seeders\LanguageSeeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WebAppController extends Controller
{
    //
    public function index()
    {
        $study_hour = new StudyHour;
        $contents = Content::select('content')->get();
        $languages = Language::select('language')->get();

        $today_hours = $study_hour->getTodayTime();
        $month_hours = $study_hour->getMonthTime();
        $total_hours = $study_hour->getTotalTime();
        //point:ルーティングするには、同じアドレスがあると上書きされてしまう⇒必要な関数を作って、indexの中ですべて呼び出す！
        // dd($contents);
        // dd($languages);
        return view('webapp',compact('contents','languages','today_hours','month_hours','total_hours'));
    }

    public function getBarData()
    {
        $study_hour = new StudyHour;
        $result = $study_hour->getMonthStudyArray();
        return $result;
    }

    public function getPie1Data()
    {
        $language_hour = new RecordLanguage;
        $result = $language_hour->GetRecordLanguage();
        return $result;
    }
    public function getPie2Data()
    {
        $content_hour = new RecordContent;
        $result = $content_hour->GetRecordContent();
        return $result;
    }
}
