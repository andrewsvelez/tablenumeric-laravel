<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\notes;

Route::get('/test', function(){
	echo "Esto es una simple prueba!!";
});
Route::get('note', function () {
    $notes = notes::all();
    //dd($notes);
		  return view('notes',compact('notes'));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('note/create', function () {
    return [
			'note' =>'create'
		];
});
Route::get('/tabla', function () {
    return view('tabla');
});
Route::get('/conca', function () {
    return view('concatenar');
});
