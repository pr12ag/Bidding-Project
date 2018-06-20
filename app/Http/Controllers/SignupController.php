<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function show()
    {
        
        if(session()->has('email'))
        {
            return view('userHome');
        }
    	return view ('signup');
    } 
    

     public function insert(Request $req)
    
    {    	
    	$firstName 		= 	$req->input('firstName');
    	$lastName 		=	$req->input('lastName');
    	$email			=	$req->input('email');
    	$password		=	$req->input('password');
    	$location		=	$req->input('location');
    	$contactno	    = 	$req->input('contactno');
        $hash           =   md5( rand(0,1000) );
        $status         =   '0';

        $data=array(
        
    		"firstName"		=>	$firstName,
    		"lastName"		=>	$lastName,
    		"email"			=>	$email,
    		"password"		=>	$password,
    		"location"		=>	$location,
    		"contactno" 	=>	$contactno,
            "hash"          =>  $hash,
            "status"        =>  $status,
            );
    	

        

    	DB::table('users')->insert($data); 
        $user = DB::table('users')->where('email', $email)->first(); 
        $user_id=$user->id;
        $data=array(
            'user_id'   =>   $user_id,
            );
        DB::table('freelancers')->insert($data); 
        $data= array(
            'id'=> $user_id,
            );
        DB::table('profile')->insert($data);
        
        $to      = $email; 
        $subject = 'Signup | Verification';  
        $message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$email.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'';
                     
$headers = 'From:noreply@example.com' . "\r\n"; // Set from headers
$test = "vdv";
$test = mail($to, $subject, $message);
echo $test;
$msg = 'Sign Up Sucessful!!!!';
// echo '<div class="statusmsg">'.$msg.'</div>';
    	return view('loginUser')->with('msg',$msg);   	
    }
     
    
    // public function signup(Request $request){
    //     $this->validate($request, [
    //         'firstName' => 'required',
    //         'lastName'  => 'required'
    //         'email'     => 'required'
    //         'password'  => 'required'
    //         'location'  => 'required'
    //         'contactno' => 'required',
    //         ])
    //     return "Validation Passed";
    // }
         public function __construct(User $user)
         {
            $this->user = $user;

         }
         
        

         
}
