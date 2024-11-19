<?php

use Illuminate\Support\Facades\Route;
use ExamplePackage\Http\Controllers\ExampleController;

Route::get('/example', [ExampleController::class, 'index']);
