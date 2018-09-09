<?php

namespace App\Http\Controllers;
use App\User;
use App\bookmark2;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function cool()
    {
        $user = Auth::user();
        $bookmarks2 = $user->bookmarks2()->latest()->get();
        
        return view('coolTemplate.cool', compact('bookmarks2','user'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('welcome');
    }
}
