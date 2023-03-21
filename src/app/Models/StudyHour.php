<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class StudyHour extends Model
{
    use HasFactory;
    public function study_hours()
    {
        return $this;
    }
    public function getTodayTime()
    {
        $today = Carbon::now()->format('Y-m-d');   
        return $this->selectRaw('SUM(hours) AS hour_today')
        ->where('date',$today)
        ->groupBy('date')
        ->first();
        // dd($today_hours);
    }

    public function getMonthTime()
    {
        $today = Carbon::now()->format('Y-m-d');
        $month_first_day = Carbon::now()->format('Y-m-01');
        return $this->selectRaw('SUM(hours) AS hour_month')
        ->whereBetween('date',[$month_first_day,$today])
        ->first();
        // dd($month_hours);
    }
    public function getTotalTime()
    {
        return $this->selectRaw('SUM(hours) AS hour_total')
        ->first();
        //getメソッドを使っているので、複数のデータを取得してくる可能性があり。->firstで値一つだけ
        // dd($total_hours);
    }

    public function getMonthStudyArray()
    {
        $month_first_day = Carbon::now()->startOfMonth()->toDateString();
        $month_last_day = Carbon::now()->endOfMonth()->toDateString();
        $bar_data = $this
        ->selectRaw('date')
        ->selectRaw('SUM(hours) AS hours')
        ->whereBetween('date',[$month_first_day,$month_last_day])
        ->groupBy('date')
        ->get();
        return $bar_data;
    }

}
