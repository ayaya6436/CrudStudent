<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route welcome page

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// route student page
Route:: get('/etudiant',[EtudiantController::class ,'index'])->name('student');
// route student add page
Route:: get('/etudiant/create',[EtudiantController::class ,'create'])->name('student.create'); 

Route:: post('/etudiant/create',[EtudiantController::class ,'store'])->name('student.add'); 
