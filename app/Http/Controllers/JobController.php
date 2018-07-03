<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function postJobShow()
    {
    	
        if(session()->has('email'))
        {
            return view('postjob');
        }
    	return view('index');
    }
    public function postJob(Request $req)
    {	
        if(session()->has('email'))
        {


        $file =  $req -> file('attachment');
        $filename = "";
        if(isset($file))
        {
            $count = DB::table('counter')->where('name','count')->first();
        $extension=$file->getClientOriginalExtension();
      $filename='attachment'.$count->value.'.'.$extension;
      $destinationPath = 'uploads';
      $file->move($destinationPath,$filename);
      $data = array(
        'value' => ($count->value+1),
        );
      DB::table('counter')->where('name','count')->update($data);
      }

    	$projectCategory        =         $req->input('category');
    	$projectTitle           =         $req->input('projectTitle');
    	$projectDescription     =         $req->input('projectDescription');
    	$projectPrice           =         $req->input('projectPrice');
    	$duration               =         $req->input('duration');
    	/*$deadline               =         $req->input('deadline');*/
    	$attachment             =         $req->input('attachment');


    	$email =session()->get('email');



    	$user          =  DB::table('users')->where('email', $email)->first(); 
        $client_id     =  $user->id;

        $categorie     =  DB::table('categories')->where('name', $projectCategory)->first(); 
        $categorie_id  =  $categorie->id;


    	$data=array(
    		'client_id'       =>  $client_id,
    		'categorie_id'    =>  $categorie_id,
    		'title'           =>  $projectTitle,
    		'description'     =>  $projectDescription,
    		'durtion'         =>  $duration,
    		'cost'            =>  $projectPrice,
    		/*'deadline'        =>  $deadline  ,*/
            'attachment'      => $filename ,
    		);
    	DB::table('projects') ->  insert($data);
    	$msg="Your Job has been Posted !!!!";
        return redirect()->route('viewjob')->with('msg',$msg);
        }
    	return view('index');
    }
    public function search()
        {
            
        if(session()->has('email'))
        {
            $id = session()->get('id');
        	$projects=DB::table('projects')->where('client_id','!=',$id)->orderBy('id','DESC')->get(); 
        	//echo $projects;
            return view('searchjobs')->with('projects', $projects);
		}
			return view('index')->with('msg','Login First');
        }

        public function jobProposal(Request $req)
        {	
        	
        if(session()->has('email'))
        {


        	$project_id =  $req->input('project_id');
        	$project=DB::table('projects')->where('id',$project_id)->first();
            $category=DB::table('categories')->where('id',$project->categorie_id)->first();
        	return view('proposal')->with('project',$project)->with('category',$category->name);
        }
            return view('index');
        }
        public function postJobProposal(Request $req)
        {	
        	
        if(session()->has('email'))
        
        {
        	$project_id     =        $req->input('project_id');
        	$description    =        $req->input('proposal');
        	$duration        =        $req->input('duration');
        	$cost           =        $req->input('price');
            $upFrontvalue   =       $req->input('upfront');
            $upFrontstatus  =       0;
            if(isset($upFrontvalue))
            {
                $upFrontstatus=1;
            }
        	$email =session()->get('email');
        	$user          =  DB::table('users')->where('email', $email)->first(); 

        	$user_id     =  $user->id;

        	$data=array(
        		'user_id'       =>  $user_id,
        		'project_id'    =>  $project_id,
        		'description'   =>  $description,
        		'duration'       =>  $duration,
        		'cost'          =>  $cost,
                'upfront_value' =>  $upFrontvalue,
                'upfront_status' => $upFrontstatus,
        		);

       		DB::table('proposals') ->  insert($data);

        	return redirect()->route('viewjob')->with('msg','Proposal Created Successfully !!!!');
        	}
    			return view('index');
        }
        public function viewJob()
        {	

        	
        if(session()->has('email'))
        {
        	$email =session()->get('email');
        	$user          =  DB::table('users')->where('email', $email)->first(); 
        	$user_id     =  $user->id;
        	$projects    =  DB::table('projects')->where('client_id',$user_id)->orderBy('id','DESC')->get();
        	$proposals   =  DB::table('proposals')->where('user_id',$user_id)->orderBy('id','DESC')->get();
             return view('viewjob')->with('projects',$projects)->with('proposals',$proposals);

        	}
    			return view('index');
        }

}
