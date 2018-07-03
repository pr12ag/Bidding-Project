<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
	public function test(){
		echo "yesyeey";
		return view('test');
	}
    public function download($file){
    	 $file= public_path(). "/uploads/".$file;

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'filename.pdf', $headers);
    }
}
