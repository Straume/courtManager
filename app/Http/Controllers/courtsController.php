<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Court;

class courtsController extends Controller
{    
    public function getCourts(){
        $courts = Court::all();
        return view('courts')->with('courts', $courts);
    }
}
