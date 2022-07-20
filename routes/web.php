<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\User;
use \App\Http\Controllers\ListingController;

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
Route::get('/', [ListingController::class, 'index']);

//Single listing
Route::post('/listings', [ListingController::class, 'store']);

//show create form
Route::get('/listing/create', [ListingController::class, 'create']);

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
