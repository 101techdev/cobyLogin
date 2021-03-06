<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Form;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class DatabaseController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function login()
    {
        return view('pages.login');
    }


    public function doLogin()
    {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']))
        {
            echo "Please try again";
        }
        else {
            $user = new User;
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return view('pages.welcome');
            }


    }
    }
//            return view('pages.welcome');




//    {
//// validate the info, create rules for the inputs
////        $rules = array(
//////            'name' => 'required|email', // make sure the email is an actual email
////            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
////        );
//
//// run the validation rules on the inputs from the form
//        $validator = Validator::make(Input::all(), $rules);
//
//// if the validator fails, redirect back to the form
//        if ($validator->fails()) {
//            return Redirect::to('login')
//                ->withErrors($validator)// send back all errors to the login form
//                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
//        } else {
//
//            // create our user data for the authentication
//            $userdata = array(
//                'email' => Input::get('email'),
//                'password' => Input::get('password')
//            );
//
//            // attempt to do the login
//            if (Auth::attempt($userdata)) {
//
//                // validation successful!
//                // redirect them to the secure section or whatever
//                // return Redirect::to('secure');
//                // for now we'll just echo success (even though echoing in a controller is bad)
//                echo 'SUCCESS!';
//
//            } else {
//
//                // validation not successful, send back to form
//                return Redirect::to('pages.welcome');
//
//            }
//
//        }
//    }

