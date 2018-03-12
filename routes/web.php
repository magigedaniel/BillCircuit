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

Route::get('/', function () {
    return view('welcome');
});

// Route Home page
Route::get('/home', function ()
{
    return view('home');
});
//End of home route

//Route to service page
Route::get('/service', function ()
{
    return view('service');
});
//end to service route

Route::get('/about', function ()
{
    return view('about');
});
