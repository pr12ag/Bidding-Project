<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller {
   public function index(){
      return view('uploadfile');
   }
   public function uploadProfilePic(Request $request){
      $file = $request->file('image');
   	  $id =session()->get('id');
   	 
      $extension=$file->getClientOriginalExtension();
      $filename=$id.'.'.$extension;
      $destinationPath = 'uploads';
      $file->move($destinationPath,$filename);
      $data = array(
      	'profilepicture' => $filename      	
      	);
      DB::table('profile')->where('id',$id)->update($data);



      return redirect()->route('profile');
   }
}