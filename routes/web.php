<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Admin home view
Route::get('/admin',[AdminController::class,'index']);

// Skill view
Route::get('/',[PublicController::class,'index']);

Route::get('/#skill',[PublicController::class,'showskills']);

// Projects view
Route::get('/projects',[AdminController::class,'project'])->name("projects");

//  view addproject from admin panel
Route::get('/addproject',[AdminController::class,'vAddproject'])->name('addproject');

// add project to dbms

Route::post('/addprojectdbms',[AdminController::class,'addprojectdbms']);

// view addskill from admin panel
Route::get('/addskill',[AdminController::class,'vaddskill']);

// add skill to skill list
Route::post('/addskill1',[AdminController::class,'Addskill']);

// specfic project view
Route::get('/projectView/{id}',[AdminController::class,'projectView']);
