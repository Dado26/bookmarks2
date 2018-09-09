<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function welcome()
            {
         return view('welcome');
            }
            
            public function cool() {
                return view('coolTemplate.cool');
            }
    public function contact(){
        return view('contact');
    }
    
    public function contact_post(){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city= $_POST['city'];
        $zip = $_POST['zip'];
        $website = $_POST['website'];
        $message = $_POST['message'];
        
        $to= 'danielcerovsky@yahoo.com';
        $subject = 'New message';
        
        mail($to, $subject, $message, "<br>From :" .$first_name . ' '. $last_name ."<br>My email:" .$email . "<br>My Phone:".$phone);
        return redirect()->route('welcome');
        
    }
}
