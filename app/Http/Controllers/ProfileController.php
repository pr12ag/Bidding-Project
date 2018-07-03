<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function editInfo()
    {          
      if(session()->has('email'))
        {
            
        
      $id=session()->get('id');
    	$user = DB::table('users')->where('id',$id)->first();
    	$profile = DB::table('profile')->where('id',$id)->first();
    	if(!isset($profile->profilepicture))
    	{
    		$profile->profilepicture = "defaultpp.png";
    	}
    return view('editprofile')->with('user',$user)->with('profile',$profile);
    }
      return view('index');
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
   public function userInfo()
   {
    if(session()->has('email'))
        {
            
        
      $id=session()->get('id');
      $user = DB::table('users')->where('id',$id)->first();
      $profile = DB::table('profile')->where('id',$id)->first();
      if(!isset($profile->profilepicture))
      {
        $profile->profilepicture = "defaultpp.png";
      }
      $user_id     =  $user->id;
          $projects    =  DB::table('projects')->where('client_id',$user_id)->orderBy('id','DESC')->get();
          $proposals   =  DB::table('proposals')->where('user_id',$user_id)->orderBy('id','DESC')->get();
    return view('profile')->with('user',$user)->with('profile',$profile)->with('projects',$projects)->with('proposals',$proposals);
    }
      return view('index');
    
   } 
    	
}
