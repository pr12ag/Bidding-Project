<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('about','ViewController@aboutPage')->name('view');//about us

Route::get('work','ViewController@working')->name('work');//how it work

Route::get('view','ViewController@index')->name('view');// home page;

Route::get('userHome','ViewController@index')->name('userHome');// home page after login;

Route::get('loginUser','ViewController@show')->name('loginUser');//login;
Route::post('loginUser','ViewController@login')->name('loginUser');

Route::get('signup','SignupController@show')->name('signup');//signup;

Route::post('signup','SignupController@insert');//SIGNUP POST

Route::get('postjob','JobController@postJobShow')->name('postjob');//get postjob
Route::post('postjob','JobController@postJob')->name('postjob');//post job
Route::get('logout','ViewController@logout')->name('logout');//logout

Route::get('searchjobs','JobController@search')->name('searchjobs');//search job

Route::get('proposal','JobController@jobProposal')->name('proposal');//proposal page
Route::post('jobProposal','JobController@postJobProposal')->name('jobProposal');//post job proposal

Route::get('viewjob','JobController@viewJob')->name('viewjob');//view job proposal

Route::get('mail','MailController@send')->name('mail');
//mail controller

Route::get('profile','ProfileController@info')->name('profile');//profile controller

Route::post('updateprofile','ProfileController@updateProfile')->name('updateprofile');//update profile


Route::post('uploadprofilepic','UploadFileController@uploadProfilePic')->name('uploadprofilepic');//upload file

Route::get('test',function()
{
	 $msg ="sample msg";
	 
	 return view('test')->with('msg',$msg);
});

Route::get('/', function () {
    return view('welcome');
});



// Route::get('auth/facebook', 'SignupController@redirectToProvider');//facebook routes;
// Route::get('auth/facebook/callback', 'SignupController@handleProviderCallback');//facebook routes;

// // Email related routes
// Route::get('mail/send', 'MailController@send');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



 