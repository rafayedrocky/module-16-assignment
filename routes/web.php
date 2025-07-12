<?php

use App\Http\Controllers\BootstrapTemplateController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bootstrap-template/home', [BootstrapTemplateController::class, 'index'])->name('home');
Route::get('bootstrap-template/resume', [BootstrapTemplateController::class, 'resume'])->name('resume');
Route::get('bootstrap-template/projects', [BootstrapTemplateController::class, 'projects'])->name('projects');
Route::get('bootstrap-template/contact', [BootstrapTemplateController::class, 'contact'])->name('contact');

Route::get('contact', [ContactController::class, 'showContactForm'])->name('contact-form');
Route::post('contact/submit', [ContactController::class, 'submitContact'])->name('contact-submit');
Route::get('contact/confirm', [ContactController::class, 'confirmContact'])->name('contact-confirm');