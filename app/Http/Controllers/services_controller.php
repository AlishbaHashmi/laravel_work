<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class services_controller extends Controller
{
    public function services(){
        return view ('services');
    }
}
