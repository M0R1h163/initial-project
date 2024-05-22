<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Breaks;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class BreakController extends Controller
{
    // 休憩開始ボタン（作成途中）
    public function breakStart(Request $request)
    {
        $userId=Auth::id();
        $start_time = Carbon::now();
        $start = [
            'attendances_id' => Breaks::where('attendances_id', $userId),
            'start_time' => Carbon::parse($start_time)->format('Y-m-d H:i:s'),
        ];
        Breaks::create($start);
        return redirect()->back();
    }

    // 休憩終了ボタン（作成途中）
     public function breakEnd(Request $request)
    {
        $userId=Auth::id();
        $end_time = Carbon::now();
        $end = [
            'end_time' => Carbon::parse($end_time)->format('Y-m-d H:i:s'),
        ];

        $latest_attendance = Breaks::where('attendances_id', $userId)
            ->whereNull('end_time')
            ->orderBy('id', 'DESC')
            ->first();
        $latest_attendance->update($end);
        return redirect()->back();
    }
}
