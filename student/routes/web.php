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
Route::get('/export', [StudentController::class, 'export'])->name('student.export'); //EXCEL 匯出
Route::get('/import', [StudentController::class, 'import'])->name('student.import'); //EXCEL 匯入

//resource 
// Route::resource('photo', PhotoController::class);
// Route::resource('', StudentController::class); // 沒打路徑 localhost 也能會跑到student.index.php
Route::resource('students', StudentController::class); //localhost/students -> student.index.php
