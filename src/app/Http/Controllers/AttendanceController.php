<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function HomeButton(Request $request)
    {
        $userId=Auth::id();
        $startButton = Attendance::where('users_id', $userId)
            ->whereNull('start_time','end_time')
            ->first();
        $endButton = Attendance::where('users_id', $userId)
            ->whereNull('end_time')
            ->first();
        return view('stamp',compact('startButton','endButton'));
    }

    public function startTime(Request $request)
    {
        $userId=Auth::id();
        $start_time = Carbon::now();
        $start = [
            'users_id' => $userId,
            'date' => Carbon::parse($start_time)->format('Y-m-d'),
            'start_time' => Carbon::parse($start_time)->format('Y-m-d H:i:s'),
        ];
        Attendance::create($start);
        return redirect()->back();
    }

    public function endTime(Request $request)
    {
        $userId=Auth::id();
        $end_time = Carbon::now();
        $end = [
            'end_time' => Carbon::parse($end_time)->format('Y-m-d H:i:s'),
        ];

        $latest_attendance = Attendance::where('users_id', $userId)
            ->whereNull('end_time')
            ->orderBy('id', 'DESC')
            ->first();
        $latest_attendance->update($end);
        return redirect()->back();
    }


}
