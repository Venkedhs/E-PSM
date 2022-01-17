<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SvHunting;

class studentController extends Controller
{
    //create function to read from form 
public function search()
{
    $search_text =$_GET['query'];
    $SvHunting = SvHunting:: where('supervisorname','LIKE', '%'.$search_text.'%')->get();
    $SvHunting = SvHunting:: where('expertise','LIKE', '%'.$search_text.'%')->get();
}
}
