<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function gallery(){
        return view('gallery');
    }
    public function contact(){
        return view('contact');
    }
    public function services(){
        return view('services');
    }
}
