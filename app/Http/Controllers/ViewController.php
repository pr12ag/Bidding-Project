<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{   
    public function aboutPage()
    {

        if(session()->has('email'))
            return view('aboutl');
        return view('about');
    }
    public function working()
    {

        if(session()->has('email'))
            return view('workl');
        return view('work');
    }
    public function index()
    {
        if(session()->has('email'))
        {
            return view('userHome');
        }
    	return view('index');
    }
    public function show()
    {

        if(session()->has('email'))
        {

            return view('userHome');
        }
    	return view('loginUser');
    }
    public function login(Request $req)
    {
    	$email			=	$req->input('email');
    	$password		=	$req->input('password');
    	$user = DB::table('users')->where('email', $email)->first(); 
    	if(isset($user) && $user->password==$password)
    	{
    		$msg = $email .  " Successfully logged In";
            $id = $user->id;
            $name = $user->firstName." ".$user->lastName;

            
            session()->put('id', $id);
            session()->put('email', $email);
            session()->put('name',$name);
    		return view('userHome')->with('msg',$msg);
    	}
    	else
    	{
    	$msg= "EMAIL OR PASSWORD INCORRECT";
    		return view('loginUser')->with('msg',$msg);
    	}
    }

        public function logout()
        {
            $value =session()->get('email');
           $msg = $value . " Successfully LOGGED OUT";
            session()->forget('email');
            // Session::flush(); // removes all session data
            return view('index')->with('msg',$msg);
        }

        public function search()
        {
            return view('searchjobs');
        }

    	
    
}
