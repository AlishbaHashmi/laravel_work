<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gallery_controller extends Controller
{
     public function gallery(){
        return view ('gallery');
    }
}
