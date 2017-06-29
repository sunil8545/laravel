<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HospitalLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:hospital');
  }
  public function showLoginForm()
  {
    return view('auth.hospital-login');
  }

  public function login(Request $request)
  {
     //Validate the form database
     $this->validate($request, [
       'email'  => 'required|email',
       'password'=> 'required|min:6'
     ]);

     //Attempt to the user log in
     if(Auth::guard('hospital')->attempt(['email' =>$request->email, 'password' => $request->password, 'user_type_id' => '3'], $request->remember)){
       //If successfull, then redirect to their intended location.
       return redirect()->intended(route('hospital.dashboard'));
     }else {
       //If unsuccessful,then redirect back to the login with the form data.
       return redirect()->back()->withInput($request->only('email','remember'));
     }

  }
}
