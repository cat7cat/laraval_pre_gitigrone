<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/', function () {
//     return view('student');
// });

// 專案的
use App\Http\Controllers\StudentController;

// 自訂義 放上面  
// resource 放下面

// 自訂義 單一
Route::get('/student', [StudentController::class, 'index'])->name('student.index'); //localhost/student -> student.index.php
Route::get('/student_excel', [StudentController::class, 'excel'])->name('student.excel');
Route::get('/student_child', [StudentController::class, 'childpage'])->name('student.child');
// Route::get('/student_store', [StudentController::class, 'store'])->name('student.store');

// 自訂義 Hotel

use App\Http\Controllers\HotelController;
Route::get('/f1', [HotelController::class, 'f1'])->name('hotels.1');
Route::get('/f2', [HotelController::class, 'f2'])->name('hotels.2');
Route::get('/f3', [HotelController::class, 'f3'])->name('hotels.3');



//resource 
// Route::resource('photo', PhotoController::class);
Route::resource('', StudentController::class); // 沒打路徑 localhost 也能會跑到student.index.php
Route::resource('students', StudentController::class); //localhost/students -> student.index.php