<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }
    public function about() {
        return view('about');
    }
    public function protofilo() {
        return view('protofilo');
    }
    public function contact() {
        return view('contact');
    }
}
