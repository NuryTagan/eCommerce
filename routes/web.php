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



Route::get('liststd', [TeacherController::class, 'liststd']);





















// Route::view('uploadimage', 'uploadimage')->name('uploadimage');
// Route::post('uploadimage', [ImageController::class, 'uploadimage']);
// Route::get('imglist', [ImageController::class, 'imglist']);























// Route::view('addpersonel', 'addpersonel');
// Route::post('addpersonel', [PersonelController::class, 'addpersonel']);
// Route::get('listpersonel', [PersonelController::class, 'listpersonel'])->name('listpersonel');
// Route::delete('deletepersonel/{id}', [PersonelController::class, 'deletepersonel'])->name('deletepersonel');
// Route::post('editpersonel/{id}', [PersonelController::class, 'editpersonel'])->name('editpersonel');
// Route::put('updatepersonel/{id}', [PersonelController::class, 'updatepersonel'])->name('updatepersonel');
// Route::get('search', [PersonelController::class, 'search'])->name('search');
// Route::post('deletemulti', [PersonelController::class, 'deletemulti']);





















// Route::view('/addteacher', 'addteacher')->name('addteacher');
// Route::post('/addteacher', [TeacherController::class, 'addteacher']);
// Route::get('/list', [TeacherController::class, 'list'])->name('list');
// Route::post('/delete-multi', [TeacherController::class, 'deleteMultiple'])->name('delete-multi');

// Route::delete('delete/{id}', [TeacherController::class, 'delete'])->name('delete');
// Route::post('edit/{id}', [TeacherController::class, 'edit'])->name('edit');
// Route::put('updatestudent/{id}', [TeacherController::class, 'updatestudent'])->name('updatestudent');



// Route::view('/add', 'add-student');
// Route::post('/add', [StudentController::class, 'addstudent']);

// Route::get('/list', [StudentController::class, 'list'])->name('list');

// Route::get('/search', [StudentController::class, 'search']);
// Route::post('/delete-multi', [StudentController::class, 'deleteMultiple']);



// Route::view('upload', 'upload');
// Route::post('upload', [UserController::class, 'upload']);


// Route::view('login', 'sample');
// Route::post('user', [UserController::class, 'user']);



// Route::view('form', 'form');

// Route::get('user', [UserController::class, 'get']);
// Route::post('user', [UserController::class, 'post']);
// Route::put('user', [UserController::class, 'post']);


// Route::any('user', [UserController::class, 'post']);
// Route::match(['get', 'post'], 'user', [UserController::class, 'group1']);
// Route::match(['put'], 'user', [UserController::class, 'group2']);



// Route::get('/queries', [UserController::class, 'queries']);



// Route::view('/std', 'student');



// Route::view('last', 'LASTCheck')->middleware('last')->name('last');
// Route::post('addsome', [UserController::class, 'onlyadd']);

// Route::get('users', [UserController::class, 'users'])->name('users');

// Route::get('/students', [UserController::class, 'getstudent']);

// Route::get('/sentAPI', [UserController::class, 'sentAPI']);




// Route::view('userform', 'user-form')->name('userform');
// Route::post('adduser', [UserController::class, 'sentToDB']);


// Route::get('ex', [UserController::class, 'eXercise']);

// Route::get('query', [UserController::class, 'queries']);

// Route::view('displayDB', 'displayDB');




// Route::get('/welcome', function () {
 
//     return view('welcome');
// });



// Route::prefix('student')->group(function(){
//     Route::view('yes','ChatGPT')->middleware('check');
//     Route::view('about','about');
// });

// Route::controller(UserController::class)->group(function(){
//     Route::get('/show', 'show')->name('show');
//     Route::get('/add', 'add');
//     Route::get('/delete', 'delete');
//     Route::get('/about/{name}', 'about');

// });

// Route::get('/about/{name}',[UserController::class, 'about'])->name('about');
// Route::get('/help',[UserController::class, 'help'])->name('about');

// Route::get('enter', [UserController::class, 'entered']);

// Route::middleware('check')->group(function(){
//     Route::controller(UserController::class)->group(function(){
//     Route::get('/show', 'show')->name('show');
//     Route::get('/add', 'add');
//     Route::get('/delete', 'delete');
//     Route::get('/about/{name}', 'about');
//     });
// });




// Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route::get('/userform', [UserController::class, 'userform']);
// Route::post('chseckuser', [UserController::class, 'checkuser']);


// Route::prefix('student')->group(function(){
//     Route::view('/home', 'home');
//     Route::get('/show', [UserController::class, 'show']);
//     Route::get('/add', [UserController::class, 'add']);
// });

// Route::middleware('check1')->group(function(){
//     Route::get('/show', [UserController::class, 'show']);
//     Route::get('/add', [UserController::class, 'add']);
//     Route::get('/delete', [UserController::class, 'delete']);
//     Route::get('/about/{name}', [UserController::class, 'about']);
// });

// Route::controller(UserController::class)->group(function(){
//     Route::get('/show', 'show')->middleware('check1');
//     Route::get('/add', 'add');
//     Route::get('/delete', 'delete');
//     Route::get('/about/{name}', 'about');
// });

// Route::view('/home', 'home')->middleware([AgeCheck::class, CountryCheck::class]);
// Route::view('/about', 'about')->middleware(CountryCheck::class);

// Route::view('/about', 'about');