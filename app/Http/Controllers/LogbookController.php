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
        return View('Logbook.LogbookEdit');
    }

    function logbookAdd()
    {
        return View('Logbook.LogbookAdd');
    }

    function logbookDelete()
    {
        return View('Logbook.LogbookDelete');
    }
}
