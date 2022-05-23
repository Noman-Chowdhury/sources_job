<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\Auth\VerificationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\JobSeekerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
Route::group(['prefix' => 'admin'], function () {
  //admin authentication system
    Route::get('jlogon', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('jlogon', [AdminLoginController::class, 'login']);
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('admin.password.update');
    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::get('upazila/get_by_district', [AdminHomeController::class, 'get_by_district'])->name('upazila.get_by_district');
    Route::get('district/get_by_divison', [AdminHomeController::class, 'get_by_division'])->name('districts.get_by_division');


    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/home', [AdminHomeController::class, 'getDashboard'])->name('admin.home');
        //Profile manage routes
        Route::get('/profile', [AdminHomeController::class, 'view_profile'])->name('view.profile');
        Route::post('/profile/{id}', [AdminHomeController::class, 'update_general'])->name('update_general');
        Route::post('/profile/password/{id}', [AdminHomeController::class, 'update_password'])->name('admin.update.password');

        Route::get('/job-seeker-list',[JobSeekerController::class,'getJobSeekerList'])->name('jobSeeker.list');
        Route::put('/job-seeker/{id}/active', [JobSeekerController::class, 'activeInactiveBlocked'])->name('jobSeeker.activeInactiveBlocked');
        Route::get('/job-seeker-export', [JobSeekerController::class, 'ExportJobSeeker'])->name('jobSeeker-export');
        Route::post('/login-as-jobSeeker',[JobSeekerController::class,'loginAsJobSeeker'])->name('login.as.jobSeeker');
        Route::get('/job-list',[JobSeekerController::class,'getJobList'])->name('job.list');
        Route::resource('/category',CategoryController::class)->except(['show']);
        Route::resource('/education',EducationController::class)->except(['show','create','edit','update']);

    });
});


