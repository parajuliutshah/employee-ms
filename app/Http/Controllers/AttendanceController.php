<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AttendanceController extends Controller
{
    //

    public function index()
    {
        // dd(Carbon::now()->format('Y-m-d')    );
        $attendence = Attendance::paginate(7);
        return view('attendance.attendance',['data'=>$attendence]);
    }

    public function store(Request $request)
    {
       $request->validate([
            'date'=>'required',
            'log_in_time'=>'required',
            'log_out_time'=>'required|different:log_in_time'
        ]);
        $date = $request->date;
        $log_in_time = $request->log_in_time;
        $log_out_time = $request->log_out_time;
        
        $attendence = Attendance::where('date','=',request('date'))->first();
        if($attendence === null){
            $attendence = new Attendance();
            $attendence->date = $date;
            $attendence->log_in_time = $log_in_time;
            $attendence->log_out_time = $log_out_time;
            $attendence->save();
            return Redirect::back()->with('success','Your Time is logged');
        }
        
        
        return Redirect::back()->withErrors(['msg'=> 'You cannot Log again on same date!!']);
    }
}
