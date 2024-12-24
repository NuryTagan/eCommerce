<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('test', function(){
    return "Hello World";
});

Route::get('persons', [CarsController::class, 'persons']);

Route::post('addmen', [CarsController::class, 'addmen']);

Route::put('updatecar', [CarsController::class, 'updatecar']);

Route::delete('cardelete', [CarsController::class, 'cardelete']);

Route::get('searchcar/{name}', [CarsController::class, 'searchcar']); 

Route::resource('member', MemberController::class)->only('create', 'edit');
// Route::resource('posts', MemberController::class)->except(['show', 'store']);