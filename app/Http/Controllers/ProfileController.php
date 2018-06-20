<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function info()
    {
    	$id=session()->get('id');
    	$user = DB::table('users')->where('id',$id)->first();
    	$profile = DB::table('profile')->where('id',$id)->first();
    	if(!isset($profile->profilepicture))
    	{
    		$profile->profilepicture = "defaultpp.png";
    	}
    return view('profile')->with('user',$user)->with('profile',$profile);
    }
    public function updateProfile(Request $req)
   {	

   		$perhrate		= 	$req->input('perhrate');
   		$skills 		= 	$req->input('skills');
   		$location 		= 	$req->input('location');
   		$id=session()->get('id');

   		$data = array(

   			"perhourrate"	=>    $perhrate,   
   			"skills"		=>    $skills,
   			);

   		DB::table('profile')->where('id',$id)->update($data);

   		$data = array(

   			"location"      =>     $location,
   			);

   		DB::table('users')->where('id',$id)->update($data);

   		return redirect()->route('profile');
   } 
    	
}
