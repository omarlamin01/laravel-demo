<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\User;

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

//All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

//Single listing
Route::get('/list{id}', function ($id) {
   return view('listing', [
       'heading' => 'Listing details',
       'listing' => Listing::find($id)
   ]);
});

Route::get('/hello', function () {
    return view('hello');
});