<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    function logbookview()
    {
        return View('Logbook.LogbookStudent');
    }

    function logbookEdit()
    {
        # code...
    }
}
