<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('/onama', function()
{
	return View::make('onama.index');
});

Route::get('/reference', function()
{
	return View::make('reference.index');
});

Route::get('/galerija', function()
{
	return View::make('galerija.index');
});

Route::get('/kontakt', function()
{
	return View::make('kontakt.index');
});
