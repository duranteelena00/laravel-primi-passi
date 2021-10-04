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

/* 
Route::get('/', function () {
    return view('home', ['user' => 'utente']);
}); 
--------------------------------------------
Route::get('/', function () {
    $user = 'utente';
    return view('home', ['user' => $user]);
}); 
*/

Route::get('/', function () {
    $user = 'utente';
    $page = 'Home';
    return view ('home', compact('user', 'page'));   
})->name('Home');

Route::get('/header', function () {
    $data = [
        'links' => [
        'Company',
        'Customers',
        'Products',
        'Contacts',
    ]];
   return view ('header', $data);   
})->name('header');