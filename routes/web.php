<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCommentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumCommentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobCommentController;
use App\Http\Controllers\AdminForumController;
use App\Http\Controllers\AdminJobController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/admin', AdminController::class);
Route::get('/auth/admin', [AdminController::class, 'login'])->name('login');
Route::post('/adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');

// Dashboard
Route::middleware('auth')->group(function () {
    Route::resource('/admin/pages/dashboard', DashboardController::class);
    Route::get('/adminLogout', [AdminController::class, 'logout'])->name('adminLogout');

    // GALLERY
    Route::resource('/admin/pages/gallery', GalleryController::class);

    // COURSE
    Route::resource('/admin/pages/course', CourseController::class);

    // FORUMS
    Route::resource('/admin/pages/forum', AdminForumController::class);

    // JOBS
    Route::resource('/admin/pages/jobs', AdminJobController::class);
    
    // ALUMNI LIST
    Route::resource('/admin/pages/alumni', AlumniController::class);

    // ALUMNI LIST APPROVAL
    Route::patch('/admin/pages/alumni/alumni-approve/{id}', [AlumniController::class, 'approve'])->name('approve');
    // Route::patch('/admin/pages/alumni/alumni-reject/{id}', [AlumniController::class, 'reject'])->name('reject');

    // FILTER
    Route::post('/admin/pages/alumni/alumni-filter', [AlumniController::class, 'filter'])->name('filter');

    // EVENT
    Route::resource('/admin/pages/event', EventController::class);
});

// USERS

Route::resource('/', ClientController::class);

Route::middleware('userAuth')->group(function () {
    // EVENT COMMENTS
    Route::resource('event-details/comments', EventCommentController::class);

    // FORUM LIST
    Route::resource('/forums', ForumController::class);

    // FORUM COMMENTS
    Route::resource('forums/forum-comments', ForumCommentController::class);

    // JOB LIST
    Route::resource('/job', JobController::class);

    // JOB COMMENT
    Route::resource('/job/job-details', JobCommentController::class);

    // ALUMNI LIST USER
    Route::get('/pages/alumni/{id}', [AlumniController::class, 'show'])->name('alumniDetails');
});

// EVENT DETAILS
Route::get('/event-details/{id}', [ClientController::class, 'show'])->name('eventDetails');



// ALUMNI PAGE VIEW
Route::get('/alumni-list', [AlumniController::class, 'showAlumnis'])->name('showAlumnis');

// ALUMNI PAGE VIEW
Route::get('/alumni-details/{id}', [AlumniController::class, 'show'])->name('alumniDetails');

// ABOUT
Route::get('/about', [AboutController::class , 'about'])->name('about');

// ALUMNI
Route::resource('/alumni/register', AlumniController::class);

// USER LOGIN
Route::get('/alumni/login', [AlumniController::class, 'login'])->name('alumniLogin');
Route::post('/alumni/loginPost', [AlumniController::class, 'loginPost'])->name('loginPost');
Route::get('/alumni/logout', [AlumniController::class, 'logout'])->name('logout');


