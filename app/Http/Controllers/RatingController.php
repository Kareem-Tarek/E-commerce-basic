<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    // Get All Ratings
    public function index(){
        // Get All Reting
        $rating = Rating::all();
        return view('pages.rating.index' , compact('rating'));
    }

}
