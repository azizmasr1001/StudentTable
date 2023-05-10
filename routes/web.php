<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/students/add', function () {
    return view('students.formadd');
});

Route::resource('students',StudentsController::class);

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('layout.main', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
*/
/*Route::get('/', function (){
    return view ('welcome');
});*/





Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);




/** Admin Group */
Route::group(['middleware'=>'admin'], function(){


    Route::get('admin/dashboard', function (){
        return view ('admin.dashboard');
    });
    Route::get('admin/admin/list', function (){
    return view ('admin.admin.list');
    });

    Route::get('/students/add', function () {
        return view('students.formadd');
    });

    Route::resource('students',StudentsController::class);



});

/** Teacher Group */
Route::group(['middleware'=>'teacher'], function(){


    Route::get('teacher/dashboard', function (){
        return view ('admin.dashboard');
    });

});

/** Teacher Group */
Route::group(['middleware'=>'student'], function(){

    Route::get('student/dashboard', function (){
        return view ('admin.dashboard');
    });

});
