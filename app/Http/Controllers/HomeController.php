<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }

    
    public function index()
    {
        return view('home');
    }
    // public function profile()
    // {
    //     return view('admin.members.profile');
    // }
}
