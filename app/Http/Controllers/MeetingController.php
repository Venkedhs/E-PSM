<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    //create function to read from form 

    function addMeetingBooking(Request $var) //student add meeting booking
    {
        print_r($var->input());
        // $var = new Meeting;
        // $var->SV_ID = $req->SV_id;
        // $var->STD_ID = $req->STD_id;
        // $var->Meeting_Date = $req->Meeting_date;
        // $var->Meeting_Start = $req->Meeting_start;
        // $var->Meeting_End = $req->Meeting_end;
        // $var->Meeting_Purpose = $req->Meeting_purpose;
        // $var->Meeting_Status = $req->Meeting_status;
        // $var->Meeting_Comment = $req->Meeting_comment;
        // $var->save();
        //$STD_ID = session()->get('logged_user');
        //$students = students::where('studentID', '=', $STD_ID)->get();
        return View('Meeting.AddMeetingBooking');
    }

    function viewMeetingBooking() //student view meeting booking
    {
        return View('Meeting.ViewMeetingBooking');
    }
    function editMeetingBooking()  //sv add meeting status
    {
        return View('Meeting.EditMeetingBooking'); 
    }
    function retriveMeeting()  //sv view meeting list detail
    {
        return View('Meeting.RetriveMeeting');
    }
    function addMeetingStatus()  //sv add meeting status
    {
        return View('Meeting.AddMeetingStatus'); 
    }
}

