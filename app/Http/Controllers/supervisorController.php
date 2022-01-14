<?php

namespace App\Http\Controllers;

use App\Models\supervisor;
use Illuminate\Http\Request;

class supervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sv_ID = session()->get('logged_user');
        $supervisor = supervisor::where('svID', '=', $Sv_ID)->get();
        return View('SupervisorProfile.profile')->with('supervisor', $supervisor);
    }

    public function editprofile()
    {
        $Sv_ID = session()->get('logged_user');
        $supervisor = supervisor::where('svID', '=', $Sv_ID)->get();
        return View('SupervisorProfile.editprofile')->with('supervisor', $supervisor);
        // var_dump($students);

    }

    public function updateprofile(Request $req)
    {
        $name = $req->input('name');
        $supervisor = supervisor::where('svID', '=', session()->get('logged_user'))->get()->first();
        $supervisor->name = $name;
        $supervisor->save();
        return redirect("supervisorprofile");
    }
}
