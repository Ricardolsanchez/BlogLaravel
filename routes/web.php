<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UseController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', [ListingController::class, 'index']);  


// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth'); 


// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth'); 

//Show Edit Form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth'); 

// Update List

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete ('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage',[ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register create form 
Route::get('/register', [UseController::class, 'create'])->middleware('guest');

//Create new user

Route::post('/users', [UseController::class, 'store']);

//log user out
Route::post('/logout', [UseController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UseController::class, 'login' ])->name('login')->middleware('guest');

//Login user Route

Route::post('/users/authenticate', [UseController::class, 'authenticate']);



