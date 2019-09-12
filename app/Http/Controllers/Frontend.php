<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{

    public function home(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function marketing(){
        return view('frontend.marketing');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function faq(){
        return view('frontend.faq');
    }
    public function plans(){
        return view('frontend.plans');
    }
    public function referral(){
        return view('frontend.referral');
    }
    public function terms(){
        return view('frontend.terms');
    }
}
