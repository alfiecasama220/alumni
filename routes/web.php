<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AlumniController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/admin', AdminController::class);
Route::post('/adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');

// Dashboard
Route::middleware('auth')->group(function () {
    Route::resource('/admin/pages/dashboard', DashboardController::class);
    Route::get('/adminLogout', [AdminController::class, 'logout'])->name('adminLogout');

    // GALLERY
    Route::resource('/admin/pages/gallery', GalleryController::class);

    // COURSE
    Route::resource('/admin/pages/course', CourseController::class);
    
    // ALUMNI LIST
    Route::resource('/admin/pages/alumni', AlumniController::class);
});

// USERS

Route::resource('/', ClientController::class);

// ALUMNI
Route::resource('/alumni/register', AlumniController::class);

// USER LOGIN
Route::get('/alumni/login', [AlumniController::class, 'login'])->name('alumniLogin');
Route::post('/alumni/loginPost', [AlumniController::class, 'loginPost'])->name('loginPost');
Route::get('/alumni/logout', [AlumniController::class, 'logout'])->name('logout');


