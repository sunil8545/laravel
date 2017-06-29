<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DoctorLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:doctor');
    }
    public function showLoginForm()
    {
      return view('auth.doctor-login');
    }

    public function login(Request $request)
    {
       //Validate the form database
       $this->validate($request, [
         'email'  => 'required|email',
         'password'=> 'required|min:6'
       ]);

       //Attempt to the user log in
       if(Auth::guard('doctor')->attempt(['email' =>$request->email, 'password' => $request->password, 'user_type_id' => '2'], $request->remember)){
         //If successfull, then redirect to their intended location.
         return redirect()->intended(route('doctor.dashboard'));
       }else {
         //If unsuccessful,then redirect back to the login with the form data.
         return redirect()->back()->withInput($request->only('email','remember'));
       }

    }
}
