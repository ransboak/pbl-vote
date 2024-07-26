<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function staffPage(){
        if(Auth::user()){
            $users = DB::table('staffs')->get();
            return view('staff.index', compact('users'));
        }else{
            return redirect()->back();
        }
    }
    public function attendancePage(){
        if(Auth::user()){
            $users = DB::table('attendees')->get();
            $usersCount = $users->count();
            return view('pages.attendance', compact('users', 'usersCount'));
        }else{
            return redirect()->back();
        }
    }

    public function getStaff(Request $request){
        $request->validate([
            'staffId' => 'required'
        ]);
        $id = $request->staffId;

        $user = DB::table('staffs')->where('staffId', $id)->first();
        return view('pages.staffDetails', compact('user'));
    }
}
