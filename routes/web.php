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

    if (!$logged_user) {
        return view('welcome');
    } else {
        return redirect('home');
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
//Route::post('update_profile', 'supervisorController@updateprofile');
// url tak boleh sama tapi ada cara kalau nak pakai url sama

//MeetingBooking
use App\Http\Controllers\MeetingController;

Route::get('AddMeetingBooking', [MeetingController::class, 'addMeetingBooking']);

//Logbook
use App\Http\Controllers\LogbookController;

Route::get('LogbookStudent', [LogbookController::class, 'logbookview']);
