<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');  
});
Route::get('/server','HomeController@index')  ;

Route::get('/view/{sekolah}',function(
			$sekolah){
	echo $sekolah;
});
Route::get('sekolah/{sekolah?}','HomeController@sekolah');

Route::get('detail/{sekolah?}','HomeController@detail');