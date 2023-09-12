<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
class RatingApiController extends Controller
{
    // Get All Ratings
        public Function getRatings(){
            //get All Retings
            $ratings = Rating::all();
            return response()->json($ratings);
        }
}
