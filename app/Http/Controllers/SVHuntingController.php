<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SvHunting;

class SvHuntingController extends Controller
{
    //create function to read from form 
    public function search()
    {
    $search_text =$_GET['query'];
    $SvHunting = SvHunting:: where('supervisorname','LIKE', '%'.$search_text.'%')->get();
    $SvHunting = SvHunting:: where('expertise','LIKE', '%'.$search_text.'%')->get();

    return view('SvHunting.search', compact('SvHunting'));
    }

    //student
    public function SvHuntingInterface()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('SvHunting', 'users.userID', '=', 'SvHunting.userID')
            ->where('SvHunting.userID', '=', $USER_ID)
            ->get();
        return View('SvHunting.Addsv')->with('SvHunting', $users);
        // var_dump($students);

    }


    function applySV(Request $require)// student apply supervisor
    {

        $ProjectTitle = $req->input('ProjectTitle');
        $SummariesTopic = $req->input('SummariesTopic');
        $ReasonApplysv = $req->input('ReasonApplysv');
        
 
        //table Sv hunting
        $SvHunting = new svHunting;
        $SvHunting->userID = session()->get('logged_user');
        $SvHunting->ProjectTitle = $ProjectTitle;
        $SvHunting->SummariesTopic = $SummariesTopic;
        $SvHunting->ReasonApplysv = $ReasonApplysv;
        $SvHunting->save();
        return redirect("viewSVList");
    }

    function viewSVList(Request $require) // view supervisor list
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('SvHunting')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('SvHunting.ViewSVList')->with('SvHunting', $users);
         //var_dump($users);
    }

    function viewApplicationStatus(Request $require)//student view application status
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('SvHunting')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('SvHunting.ViewApplicationStatus')->with('SvHunting', $users);
         //var_dump($users);
    }

    //Coordinator
    function addsv(Request $req) 
    {
        
        $Meeting_Date = $req->input('Meeting_Date');
        $Meeting_Start = $req->input('Meeting_Start');
        $Meeting_End = $req->input('Meeting_End');
        $Meeting_Purpose = $req->input('Meeting_Purpose');
 
        //table meetings
        $meetings = new meetings;
        $meetings->userID = session()->get('logged_user');
        $meetings->Meeting_Date = $Meeting_Date;
        $meetings->Meeting_Start = $Meeting_Start;
        $meetings->Meeting_End = $Meeting_End;
        $meetings->Meeting_Purpose = $Meeting_Purpose;
        $meetings->save();
        return redirect("ViewMeetingBooking");

    }

    function viewSvList() //student view supervisor list
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('SvHunting')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('SvHunting.viewSvList')->with('SvHunting', $users);
         //var_dump($users);
        return View('SvHunting.viewSvList');
    }

    

    
    

}
