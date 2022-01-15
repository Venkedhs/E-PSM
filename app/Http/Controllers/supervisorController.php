<?php

namespace App\Http\Controllers;

use App\Models\supervisors;
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
        $supervisors = supervisors::where('svID', '=', $Sv_ID)->get();
        return View('SupervisorProfile.profile')->with('supervisors', $supervisors);
    }

    public function editprofile()
    {
        $Sv_ID = session()->get('logged_user');
        $supervisors = supervisors::where('svID', '=', $Sv_ID)->get();
        return View('SupervisorProfile.editprofile')->with('supervisors', $supervisors);
        // var_dump($students);

    }

    public function updateprofile(Request $req)
    {
        $name = $req->input('name');
        $supervisors = supervisors::where('svID', '=', session()->get('logged_user'))->get()->first();
        $supervisors->name = $name;
        $supervisors->save();
        return redirect("supervisorprofile");
    }
}
