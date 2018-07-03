<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function userInfo()
   {
   	return view('profil');
   } 
}
