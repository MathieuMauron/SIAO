<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActuController extends Controller
{
    public function addActualite(){
        if(Auth::user()->email==="admin@gmail.com"){
            
        }
    }
}
