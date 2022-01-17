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

    function viewSvList() //student view supervisor list
    {
        return View('SvHunting.viewSvList');
    }

    function viewApplicationStatus() //student view supervisor application status
    {
        return View('SvHunting.ViewApplicationStatus');
    }

    function addsv(Request $var) //Coordinator add supervisor
    {
        print_r($var->input());
        
        return View('SvHunting.Addsv');
    }
    function applySV(Request $var) //student add supervisor
    {
        print_r($var->input());
        
        return View('SvHunting.ApplySV');
    }

}
