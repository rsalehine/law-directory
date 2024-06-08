<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Public\PublicController;

//public routes start

Route::get('/', [PublicController::class, 'index'])->name('public.home');



Route::get('/about', [PublicController::class, 'about'])->name('public.about');
Route::get('/contact', [PublicController::class, 'contact'])->name('public.contact');
Route::get('/blog', [PublicController::class, 'blog'])->name('public.blog');
Route::get('/blog/{post}', [PublicController::class, 'showBlogPost'])->name('public.blog-post');
Route::get('/terms', [PublicController::class, 'terms'])->name('public.terms');
Route::get('/privacy', [PublicController::class, 'privacy'])->name('public.privacy');
Route::get('/lawyers', [PublicController::class, 'lawyers'])->name('public.lawyers');
Route::get('/law-firms', [PublicController::class, 'lawfirms'])->name('public.law-firms');
Route::get('/lawyer-profile/{id}', [PublicController::class, 'lawyerProfile'])->name('public.lawyer-profile');
Route::get('/law-firm-profile/{id}', [PublicController::class, 'lawFirmProfile'])->name('public.law-firm-profile');

//public routes end

Auth::routes();

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('Admin Dashboard');
