<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_controller extends Controller
{
    public function gallery(){
        return view ('gallery');
    }
}
