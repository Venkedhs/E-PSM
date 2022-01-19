<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogbookController extends Controller
{
    function logbookview()
    {
        return View('Logbook.LogbookStudent');
    }

    function logbookstudentview()
    {
        
        return View('LogbookViewStd');
         //var_dump($users);
    }

    function logbookDelete()
    {
        return View('Logbook.LogbookDelete');
    }

    function AddLogbook(Request $req) 
    {
        
        $Title = $req->input('Title');
        $Prepared_by = $req->input('Prepared_by');
        $Date = $req->input('Date');
        $Description = $req->input('Description');
 
        
        $logbook = new logbook;
        
        $logbook->Title = $Title;
        $logboook->Prepared_by = $Prepared_by;
        $logbook->Date = $Date;
        $logbook->Description = $Description;
        $logbook->save();
        return redirect("LogbookViewStd");

    }
}
