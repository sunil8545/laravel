<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
   public function __construct()
   {
     $this->middleware('auth:doctor');
   }

    public function index()
    {
      return view('doctor-dashboard');
    }
}
