<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\GlobalMW;
use App\Http\Middleware\LAST;
use Illuminate\Support\Facades\Route;

Route::view('login', 'login');
Route::view('master', 'master');
Route::view('footer', 'footer');
