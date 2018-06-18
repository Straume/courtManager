<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    
    public function getContacts(){
        return view('contacts');
    }
    
    public function getCourts(){
        return view('courts');
    }
    
    
}
