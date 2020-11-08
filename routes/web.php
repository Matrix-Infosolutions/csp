<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


//********bnkreg*******
Route::get('bankreg', function () {return view('bankreg');});
Route::post('savebankreg', 'bankregcontroller@savebankreg');
Route::post('searchbnk','bankregcontroller@searchbank');
//********bnkreg*******

//********servicesave*******
Route::get('servicemaster', function () {return view('servicesave');});
Route::post('saveservice','servicemastercontrollers@servicesave');
Route::post('srvcmaster','servicemastercontrollers@srvcmaster');
Route::post('srvcsearch','servicemastercontrollers@searchservice');
Route::post('srvcedit','servicemastercontrollers@editservice');
Route::get('getservicelist/{val}','servicemastercontrollers@getservicelist');
// Route::get('getservicedet/{srvcid}','servicemastercontrollers@getservicedet');


//********servicesave*******
Route::get('/', function () {return view('home');});
Route::get('home', function () {return view('home');});
Route::get('about', function () {return view('aboutus');});
Route::get('contact', function () {return view('contactus');});
Route::get('services', function () {return view('servicelist');});


//********login*******
  Route::get('login', function () {return view('login1');});
  Route::get('signup', function () {return view('signup');});
  Route::post('savesignup','signupcontroller@signupssave');
  Route::post('logincheck','signupcontroller@logincheck');   
//********login*******

//********home*******
  Route::get('adsupload', function () {return view('adsupload');});
  Route::post('dropzoneStore', 'HomeController@dropzoneStore');
  Route::post('getsts','servicemastercontrollers@getclosestatus');
//********home*******

  //********contactus*******
   Route::post('savecontactus', 'contactuscontroller@savecontactus');
   Route::get('getcontactlist', 'contactuscontroller@getcontactlist');

  //********contactus*******

   Route::get('test/{val}','servicemastercontrollers@test');