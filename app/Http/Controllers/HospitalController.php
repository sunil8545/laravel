<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:hospital');
  }

   public function index()
   {
     return view('hospital-dashboard');
   }
}
