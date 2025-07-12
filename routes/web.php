<?php

use App\Http\Controllers\BootstrapTemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bootstrap-template/home', [BootstrapTemplateController::class, 'index'])->name('home');
Route::get('bootstrap-template/resume', [BootstrapTemplateController::class, 'resume'])->name('resume');
Route::get('bootstrap-template/projects', [BootstrapTemplateController::class, 'projects'])->name('projects');
Route::get('bootstrap-template/contact', [BootstrapTemplateController::class, 'contact'])->name('contact');