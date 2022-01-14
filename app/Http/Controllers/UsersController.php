<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Exception;
use App\Models\users as users;
use App\Models\students as student;


class UsersController extends Controller
{
    function login(Request $req)
    {

        // Validator

        $messages = [
            'required' => 'diperlukan',
        ];

        $rules = [
            'userID' => 'required',
            'password' => 'required'
        ];

        $validator = $req->validate($rules, $messages);

        $data = $req->input();

        // Select eloquent
        $check = users::where('userID', $req->userID)->exists();

        if ($check) {
            $users = users::where('userID', $req->userID)
                ->get()
                ->first();

            $user_type = $users->user_type;
            $userID = $users->userID;
            $name = $users->name;
            $password = $users->password;

            if ($password == $data['password']) {
                // Save into session
                Session::put('user_type', $user_type);
                Session::put('logged_user', $userID);   //put the data and in session
                Session::put('name', $name);

                return redirect('home');
            } else {

                // custom back validator message
                $custom_msg = [
                    'password' => 'Wrong password entered',
                ];

                // return back with custom error message
                // return redirect()->back()->withInput()->withErrors($custom_msg);
            }
        } else {

            $custom_msg = [
                'studentID' => 'Unregistered user ID',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }

        // return $check;
    }



    function register(Request $req)
    {


        // validation
        $messages = [
            'required' => 'diperlukan',
            'between' => 'harus diantara :min - :max aksara',
            'min' => 'minimum :min aksara',
            'confirmed' => 'kata laluan tidak sepadan'
        ];

        $rules = [

            'password' => 'required | between:5,10 | confirmed',
            'password_confirmation' => 'required',
            'userID' => 'required | min:5',
            'name' => 'required | min:5',
            'phone' => 'required',
            'email' => 'required | email'
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Pendaftaran';

        $userID = $req->userID;
        $users = new users;
        $currentdt = date('d-m-Y H:i:s');

        // Insert
        $users->user_type = $req->user_type;
        $users->password = $req->password;
        $users->userID = $userID;
        $users->name = $req->name;
        $users->phone = $req->phone;
        $users->email = $req->email;
        $users->created_at = $currentdt;
        $users->updated_at = $currentdt;

        $result = $users->save();

        if ($req->user_type = 'Student') {
            $student = new student;
            $student->userID = $userID;
            $student->save();
        }

        $details = [
            'type' => 'Registration',
            'status' => 'Success',
        ];

        $data['details'] = $details;

        $user_type = $req->user_type;
        $userID = $req->userID;
        $name = $req->name;
        Session::put('user_type', $user_type);
        Session::put('logged_user', $userID);   //put the data and in session
        Session::put('name', $name);
        return redirect('home');

        // try {

        // } catch (Exception $e) {

        //     $errCode = $e->errorInfo[1];

        //     if ($errCode == 1062) {
        //         $errStatus = 'studentID sudah wujud di dalam sistem';
        //     } else {
        //         $errStatus = 'Terdapat error';
        //     }

        //     $details = [
        //         'type' => 'Registration',
        //         'status' => 'Failed',
        //         'error_code' => $errCode,
        //         'description' => $errStatus
        //     ];

        //     $data['details'] = $details;

        //     // return $data;
        //     // return view('register');
        //     echo $e;
        // }
    }

    function resetpassword(Request $req)
    {
        // validation
        $messages = [
            'required' => 'diperlukan',
            'between' => 'harus diantara :min - :max aksara',
            'min' => 'minimum :min aksara',
            'confirmed' => 'kata laluan tidak sepadan'
        ];

        $rules = [
            'studentID' => 'required',
            'password' => 'required | between:8,10 | confirmed',
            'password_confirmation' => 'required',
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Reset Password';

        // Select eloquent
        $check = students::where('studentID', $req->studentID)->exists();

        if ($check) {

            $students = students::where('studentID', $req->studentID)
                ->get()
                ->first();

            $students->password = encrypt($req->password);
            $students->save();

            $custom_msg = [
                'success' => 'Password berjaya ditukar',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        } else {
            $custom_msg = [
                'staff_id' => 'staff id tidak berdaftar',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }
    }


    function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
