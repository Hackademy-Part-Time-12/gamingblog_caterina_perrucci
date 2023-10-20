<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('profile');
    }
    
    public function homepage() {
        return view('welcome');
    }

    public function profile(){
        return view('profile');
    }
}
