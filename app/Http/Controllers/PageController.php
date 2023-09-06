<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }
}
