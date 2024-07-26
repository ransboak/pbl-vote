<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    //
    public function registerPaps(Request $request, $staff){
        $user = DB::table('staffs')->where('id', $staff)->first();

        $exists = Attendee::where('staffId', $user->staffId)->get();

        
        
        // $attendee = new Attendee();

        // $attendee->firstName = $user->firstName;
        // $attendee->middleName = $user->middleName;
        // $attendee->lastName = $user->lastName;
        // $attendee->staffId = $user->staffId;
        // $attendee->location = $user->location;
        // $attendee->unit = $user->unit;
        // $attendee->department = $user->department;
        // $attendee->contact = $request->contact;

        // return $attendee;
        // $attendee->save();
        
        $attendee = Attendee::create([
            'firstName' => $user->firstName,
            'middleName' => $user->middleName,
            'lastName' => $user->lastName,
            'staffId' => $user->staffId,
            'location' => $user->location,
            'unit' => $user->unit,
            'department' => $user->department,
            'contact' => $request->contact,
        ]);

        if($attendee){
            return redirect('/staff')->with('success', 'Attendance recorded');
        }else{
            return redirect()->back()->with('error', 'Unable to record attendance');
        }

    }
}
