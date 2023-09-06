<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function home(){
    //     return view('pages.includes-all-static-pages.home');
    // }

    // public function about(){
    //     return view('pages.about');
    // }

    // public function services(){
    //     return view('pages.services');
    // }

    // public function portfolio(){
    //     return view('pages.portfolio');
    // }

    public function index(){
        return view('pages.index');
    }

    public function contact(){
        return view('pages.includes-all-static-pages.contact');
    }
}
