<?php

use App\Http\Controllers\BootstrapTemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bootstrap-template-home', [BootstrapTemplateController::class, 'index']);
