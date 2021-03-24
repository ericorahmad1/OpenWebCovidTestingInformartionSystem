<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\COVIDTest;
use Psy\Command\WhereamiCommand;

class ViewTestingHistory extends Controller
{
    public function ViewHistory(){
        #get user id
        $ThisID = Auth::user()->id;
        
        #Search data
        $countHistory = COVIDTest::WHERE("users_id","=", $ThisID)
            ->count();
        
        #return data
        if ($countHistory==0) {
            # if not found
            # return to patient home with error
            return redirect()->route('patientHome')->with(['error'=> 'No Data']);
        } else {
            # if found
            # get data
            $getHistory = COVIDTest::WHERE("users_id","=", $ThisID)
                ->get();
            # return data with view
            return view('Patient/History',['getHistory'=>$getHistory]);
        }
    }
}
