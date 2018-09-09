<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm(){
        return view('contact');
    }
    
    public function sendEmailAttempt(){
        
    }
}
