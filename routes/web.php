<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $logged_user = session()->get('logged_user');
    $user_type = session()->get('user_type');


    if (!$logged_user) {
        return view('welcome');
    } else {

        if ($user_type == 'Student') {
            return redirect('home');
        } elseif ($user_type == 'Supervisor') {
            return redirect('supervisorprofile');
        } elseif ($user_type == 'Technician') {
            return redirect('technicianprofile');
        }
    }
});

Route::view('register', 'register');
Route::view('forgot', 'forgot');

Route::post('user_login', 'UsersController@login');
Route::post('user_register', 'UsersController@register');

Route::post('user_reset', 'UsersController@resetpassword');

Route::get('/logout', 'UsersController@logout');

// Route::get('/details', function () {
//     //getting user logged session
//     $logged_user = session()->get('logged_user');

//     if (!$logged_user) {
//         return redirect('/');
//     } else {
//         return view('semakan.semak_details');
//     }
// })->name('details');

//Profile
use App\Http\Controllers\studentController;

Route::get('home', [studentController::class, 'index']);
Route::get('STDedit', [studentController::class, 'editprofile']);
Route::post('update_profile', 'studentController@updateprofile');

use App\Http\Controllers\supervisorController;

Route::get('supervisorprofile', [supervisorController::class, 'index']);
Route::get('SVedit', [supervisorController::class, 'editprofile']);
Route::post('update_profile', 'supervisorController@updateprofile');
// url tak boleh sama tapi ada cara kalau nak pakai url sama

use App\Http\Controllers\technicianController;

Route::get('technicianprofile', [technicianController::class, 'index']);
Route::get('TECHedit', [technicianController::class, 'editprofile']);
Route::post('update_profile', 'technicianController@updateprofile');

use App\Http\Controllers\coordinatorController;

Route::get('coordinatorprofile', [coordinatorController::class, 'index']);
Route::get('COedit', [coordinatorController::class, 'editprofile']);
Route::post('update_profile', 'coordinatorController@updateprofile');

//MeetingBooking
use App\Http\Controllers\MeetingController;

Route::get('AddMeetingBooking', [MeetingController::class, 'addMeetingBooking']); //student add meeting booking
Route::get('ViewMeetingBooking', [MeetingController::class, 'viewMeetingBooking']); //student view meeting
Route::get('EditMeetingBooking', [MeetingController::class, 'editMeetingBooking']); //student edit meetig booking
Route::get('RetriveMeeting', [MeetingController::class, 'retriveMeeting']); //sv view meeting list detail
Route::get('AddMeetingStatus', [MeetingController::class, 'addMeetingStatus']); //sv add meeting status

//Logbook
use App\Http\Controllers\LogbookController;

Route::get('LogbookStudent', [LogbookController::class, 'logbookview']);
