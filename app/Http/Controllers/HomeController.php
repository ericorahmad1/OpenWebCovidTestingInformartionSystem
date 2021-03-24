<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    
    //Patient home
    public function patientHome(){
        return view('Patient/home');
    }
}
