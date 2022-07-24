<?php

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

//Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form  to edit listing
// update - Update listing
// destroy - Delete listing

/* Listings */

// All Listing
Route::get('/', [\App\Http\Controllers\ListingController::class, 'index' ]);
// Show Create Form
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create'])->middleware('auth');
// Store Listing
Route::post('/listings', [\App\Http\Controllers\ListingController::class, 'store'])->middleware('auth');
// Show Edit Form
Route::get('/listings/{listing}/edit', [\App\Http\Controllers\ListingController::class, 'edit'])->middleware('auth');
// Update Listing
Route::put('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'update'])->middleware('auth');
// Delete Listing
Route::delete('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'destroy'])->middleware('auth');
// Manage Listings
Route::get('listings/manage', [\App\Http\Controllers\ListingController::class, 'manage'])->middleware('auth');
// Single Listing
Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);



/* USERS */

// Show Register User Form
Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');
//Store Users
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);
// Logout User
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');
// Show Login Form
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');
// Login User
Route::post('/users/authenticate', [\App\Http\Controllers\UserController::class, 'authenticate']);



