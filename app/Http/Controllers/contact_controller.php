<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact_controller extends Controller
{
    public function contact(){
        return view ('contact');
    }
}
