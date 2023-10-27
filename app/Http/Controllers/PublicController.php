<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
       // $consoles = Console::where('user_id', Auth::user()->id)->get();
       //  return view('profile', compact('consoles'));
       return view('profile');
    }
}
